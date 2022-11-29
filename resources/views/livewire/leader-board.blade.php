<div wire:poll="getResults()">
    <div data-app="true" class="v-application v-application--is-ltr theme--light" id="app" style="background-color: black;">
        <div class="v-application--wrap">
            <main class="v-main transit" data-booted="true" style="padding: 0px; background-color: black;">
                <div class="v-main__wrap">
                    <div class="container container--fluid fill-height" style="padding: 0px;">
                        <div class="row align-center justify-center">
                            <div align="center" justify="center" class="col col-6" style="padding: 0px;">
                                @foreach($evaluations as $ev)
                                    <div class="row specialHeight transit align-center justify-center gruuuu"
                                         style="">
                                        {{ $ev['name'] }} : {{ $ev['note'] }}
                                    </div>
                                @endforeach
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
        .transit {
            transition: background-color 0.5s ease;
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
        .container.fill-height {
            align-items: center;
            display: flex;
            flex-wrap: wrap;
        }
        .container--fluid {
            max-width: 100%;
        }
        .container.fill-height>.row {
            flex: 1 1 100%;
            max-width: calc(100% + 24px);
        }
        .v-application .align-center {
            align-items: center!important;
        }
        .v-application .justify-center {
            justify-content: center!important;
        }
        .v-application .align-center {
            align-items: center!important;
        }
        .v-application .justify-center {
            justify-content: center!important;
        }
        .specialHeight {
            height: 25vh;
            font-size: 40px;
            color: white;
            font-family: 'Roboto', sans-serif;
            font-weight: 900;
            text-transform: uppercase;
        }
        .transit {
            transition: background-color 0.5s ease;
        }
        .row+.row {
            margin-top: 12px;
        }
    </style>
</div>

