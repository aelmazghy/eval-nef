import Evaluation from './../components/Evaluation.vue';
import LeaderBoard from '../components/LeaderBoard.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Evaluation
    },
    {
        name: 'leaderboard',
        path: '/leaderboard',
        component: LeaderBoard,
        params: false,
        props: false
    }
];