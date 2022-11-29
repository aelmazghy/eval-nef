<template>
    <v-app style="background-color:black;">
    <v-main style="backgroundColor : black" class="transit">
        <v-container fill-height fluid style="padding:0px;">
            <v-row align="center" justify="center">

                <v-col align="center" justify="center" cols="6" style="padding:0px;">
                    <v-row align="center" justify="center" style="height:100vh;position:relative;margin-right:0px;margin-left:0px;background-color: #7681d9;">
                        <div  class="backgroundAnimator aligner" style="z-index:1040" v-if="!isHidden">
                            <img src="/images/ptit_deb_blanc.png" width="600" class="maSuperAnim">
                        </div>
                        <v-col
                            cols="12"
                            md="6"
                            v-else
                        >
                        <!-- add autofocus to textarea -->
                            <v-textarea
                                filled
                                name="input-7-4"
                                v-model="text"
                                label="Un commentaire?"
                                color="#fff"
                                :autofocus="isHidden"
                                style="
    font-size: 27px;
"
                            ></v-textarea>
                            <!-- add hiden input for rating -->
                            <v-card-actions>
                                <v-btn
                                    id="save-comment"
                                    class="white--text"
                                    color="green accent-5"
                                    depressed
                                    @click="saveComment"
                                >
                                    Envoyé (4 🥔)
                                </v-btn>
                            </v-card-actions>
                        </v-col>
                        <div  class="backgroundAnimator aligner" style="z-index:1040; display:none">
                            <h2 style="color: white; font-family: 'Roboto', sans-serif; font-weight: 900; text-transform: uppercase; font-size: 42px; " class="maSuperAnim">Merci pour votre retour 🥳</h2>
                        </div>
                    </v-row>
                </v-col>

                <v-col align="center" justify="center" cols="6" style="padding:0px;">
                    <v-row class="specialHeight transit" align="center" justify="center"
                           :style="{backgroundColor : backgroundQ}"
                           style="font-size: 37px;"
                           @mouseover="backgroundQ = '#C90F54'"
                           @mouseout="backgroundQ = '#7681d9'">
                        Comment avez-vous aimé cet événement ?
                    </v-row>
                    <v-row class="specialHeight transit" align="center" justify="center"
                           :style="{backgroundColor : backgroundTo}"
                           @mouseover="backgroundTo = '#cae00f'"
                           @mouseout="backgroundTo = '#4caf50'"
                           id="good" @click="saveResponse(1)"
                           disabled="disabled">
                        (1 🥔) Très satisfait 🤩
                    </v-row>
                    <v-row class="specialHeight transit" align="center" justify="center"
                           :style="{backgroundColor : backgroundImage}"
                           @mouseover="backgroundImage = '#21164E'"
                           @mouseout="backgroundImage = '#ff9800'"
                           id="neutral" @click="saveResponse(2)">
                        (2 🥔) neutre... 😐
                    </v-row>
                    <v-row class="specialHeight transit" align="center" justify="center"
                           :style="{backgroundColor : backgroundFi}"
                           @mouseover="backgroundFi = '#FFD500'"
                           @mouseout="backgroundFi = '#ff5722'"
                           id="bad" @click="saveResponse(3)">
                        (3 🥔) Très insatisfait 😡
                    </v-row>
                </v-col>
            </v-row>
        </v-container>
    </v-main>
    </v-app>
</template>

<script>
    const bindKey = (evt) => {
    if (evt.keyCode === 38) {
        // up
        document.getElementById('good').click();
    } else if (evt.keyCode === 40) {
        // down
        document.getElementById('bad').click();
    } else if (evt.keyCode === 37) {
        // left
        document.getElementById('neutral').click();
    } else if (evt.keyCode === 39) {
        // right
        document.getElementById('save-comment').click();
    } else if (evt.keyCode === 13) {
        // enter
    } else if (evt.keyCode === 32) {
        // espace
    }
    };
    import Bad from './../assets/emoji1.png';
    import Neutral from './../assets/emoji2.png';
    import Good from './../assets/emoji3.png';
    import ThankYou from './../assets/thumbs-up.png';
    export default {
        name: 'Evaluation',
        data() {
            return {
                backgroundQ: '#7681d9',
                backgroundTo: '#4caf50',
                backgroundImage: '#ff9800',
                backgroundFi: '#ff5722',
                selectedBackground: 'none',

                Bad,
                Neutral,
                Good,
                ThankYou,
                isHidden: false,
                rating: 0,
            }
        },
        created() {
            document.addEventListener('keydown', bindKey);
        },
        methods: {
            saveResponse(response) {
                this.rating = response;
                this.isHidden = true;
            },

            saveComment() {
                let context = this;
                axios.post('/comment',  {
                    comment: context.text,
                    result: context.rating,
                })
                .then(response => {
                    context.text = '';
                    context.isHidden = false;
                })
                .catch(error => {
                    console.log(error);
                });
            }
        }
    }
</script>

<style>
.aligner {
    padding: 0;
    margin: 0;
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
}

.transit {
    transition: background-color 0.5s ease;
}
.backgroundAnimator {
    position:absolute;
    top:0px;
    right:12px;
    height:100%;
    width:100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;

}


.fader {
    display: inherit !important;
    transition: opacity 1s;
}

.fader[style*="display: none;"] {
    opacity: 0;
    pointer-events: none;
    user-select: none;
}


.specialHeight {
    height: 25vh;
    font-size: 40px;
    color: white;
    font-family: 'Roboto', sans-serif;
    font-weight: 900;
    text-transform: uppercase;
}

.fade-enter-active, .fade-leave-active {
    transition: opacity 0.3s
}

.fade-enter, .fade-leave-active {
    opacity: 0
}

.maSuperAnim{
    transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    animation: scale-display 0.3s;

}

</style>

<style>
@keyframes scale-display {
    0% {
        opacity: 0;
        transform: scale(0);
        -webkit-transform: scale(0);
    }
    100% {
        opacity: 1;
        transform: scale(1);
        -webkit-transform: scale(1);
    }
}
</style>
