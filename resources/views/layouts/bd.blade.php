<div wire:poll="getResults()">







    <div data-v-a2309432="" data-app="true" class="v-application v-application--is-ltr theme--light" id="app" style="background-color: black;">
        <div class="v-application--wrap">
            <main data-v-a2309432="" class="v-main" data-booted="true" style="padding: 0px; background-color: black;">
                <div class="v-main__wrap">
                    <div data-v-a2309432="" class="row align-center justify-center">
                        <div data-v-a2309432="" align="center" justify="center" class="col col-6">
                            <div data-v-a2309432="">
                                <ul data-v-a2309432="">
                                    @foreach($evaluations as $ev)
                                        <li data-v-a2309432="" style="text-align: left;">
                                            <div data-v-a2309432="" class="round">{{ $ev['note'] }}</div>
                                            <div data-v-a2309432="" class="white-text">{{ $ev['name'] }}</div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div data-v-a2309432="" align="center" justify="center" class="col col-10">
                            <div data-v-a2309432="" class="v-data-table elevation-1 v-data-table--has-top v-data-table--has-bottom theme--light">
                                <div class="v-data-table__wrapper">
                                    <table>
                                        <colgroup>
                                            <col class="" />
                                        </colgroup>
                                        <tbody>
                                        @foreach($comments as $comment)
                                            <tr class="">
                                                <td class="text-start">{{ $comment->comment }}</td>
                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <style>
        .theme--light.v-application {
            background: #fff;
            color: rgba(0,0,0,.87);
        }
        .v-application {
            display: flex;
            position: relative;
        }
        .v-application {
            font-family: Roboto,sans-serif;
            line-height: 1.5;
        }
        .v-application--wrap {
            flex: 1 1 auto;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            max-width: 100%;
            position: relative;
        }
        .v-main {
            display: flex;
            flex: 1 0 auto;
            max-width: 100%;
            transition: .2s cubic-bezier(.4,0,.2,1);
        }
        .v-main__wrap {
            flex: 1 1 auto;
            max-width: 100%;
            position: relative;
        }
        .v-application .align-center {
            align-items: center!important;
        }
        .v-application .justify-center {
            justify-content: center!important;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            flex: 1 1 auto;
            margin: -12px;
        }
        .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--bs-gutter-y));
            margin-right: calc(-0.5 * var(--bs-gutter-x));
            margin-left: calc(-0.5 * var(--bs-gutter-x));
        }
        .col-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }
        .v-application ol, .v-application ul {
            padding-left: 24px;
        }
        ol, ul, dl {
            margin-top: 0;
            margin-bottom: 1rem;
        }
        .round[data-v-a2309432] {
            display: inline;
            margin-top: -15px;
            padding: 20px;
            background-color: #C90F54;
            border-radius: 50%;
            font-size: 50px;
            font-weight: bolder;
            color: white;
        }
        .white-text[data-v-a2309432] {
            display: inline;
            color: white;
            font-size: 80px;
            margin: 20px;
            text-align: left;
        }
        .col-10 {
            flex: 0 0 83.3333333333%;
            max-width: 83.3333333333%;
        }
        .theme--light.v-data-table {
            background-color: #fff;
            color: rgba(0,0,0,.87);
        }
        .v-application .elevation-1 {
            box-shadow: 0 2px 1px -1px rgba(0,0,0,.2),0 1px 1px 0 rgba(0,0,0,.14),0 1px 3px 0 rgba(0,0,0,.12)!important;
        }
        .v-data-table {
            line-height: 1.5;
            max-width: 100%;
        }
        .v-data-table {
            border-radius: 4px;
        }
        .v-data-table__wrapper {
            overflow-x: auto;
            overflow-y: hidden;
        }
        .v-data-table>.v-data-table__wrapper>table {
            width: 100%;
            border-spacing: 0;
        }
        table {
            caption-side: bottom;
            border-collapse: collapse;
        }
        thead, tbody, tfoot, tr, td, th {
            border-color: inherit;
            border-style: solid;
            border-width: 0;
        }
        .v-application .text-start {
            text-align: start!important;
        }
        .theme--light.v-data-table>.v-data-table__wrapper>table>tbody>tr:not(:last-child)>td:last-child, .theme--light.v-data-table>.v-data-table__wrapper>table>tbody>tr:not(:last-child)>td:not(.v-data-table__mobile-row), .theme--light.v-data-table>.v-data-table__wrapper>table>tbody>tr:not(:last-child)>th:last-child, .theme--light.v-data-table>.v-data-table__wrapper>table>tbody>tr:not(:last-child)>th:not(.v-data-table__mobile-row), .theme--light.v-data-table>.v-data-table__wrapper>table>thead>tr:last-child>th {
            border-bottom: thin solid rgba(0,0,0,.12);
        }
        .v-data-table>.v-data-table__wrapper>table>tbody>tr>td, .v-data-table>.v-data-table__wrapper>table>tfoot>tr>td, .v-data-table>.v-data-table__wrapper>table>thead>tr>td {
            font-size: .875rem;
            height: 48px;
        }
    </style>
</div>

