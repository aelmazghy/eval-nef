<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function index()
    {
        $comments = \DB::table('comments')->get();
        $bad = \DB::table('evaluations')->where('result', 3)->count();
        $good = \DB::table('evaluations')->where('result', 1)->count();
        $neutral = \DB::table('evaluations')->where('result', 2)->count();
        return response()->json([
            'comments' => $comments,
            'evaluations' => [
                [
                    'id' => 0,
                    'name' => 'Good',
                    'note' => $good
                ],
                [
                    'id' => 1,
                    'name' => 'Neutre',
                    'note' => $neutral
                ],
                [
                    'id' => 2,
                    'name' => 'Bad',
                    'note' => $bad
                ]
            ]
        ], 200);
    }

    public function store(Request $request) {
        $evaluation = new Evaluation();
        $evaluation->result = $request->get('result');
        $evaluation->save();
        return response()->json(
            [
                'message' => 'Evaluation created successfully',
                'evaluation' => $evaluation
            ],
            200
        );
    }

    public function storeComment(Request $request) {
        if ($request->comment != '' || $request->comment != null) {
            \DB::table('comments')->insert([
                'ip' => $request->ip(),
                'comment' => $request->comment,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        }
        $evaluation = new Evaluation();
        $evaluation->result = $request->get('result');
        $evaluation->save();
        return response()->json(
            [
                'message' => 'Comment created successfully',
                'comment' => $request->comment
            ],
            200
        );
        return response()->json(
            [
                'message' => 'Comment not created',
                'comment' => $request->comment
            ],
            200
        );
    }

    public function leaderboard() {
        return view('leaderboard');
    }
}
