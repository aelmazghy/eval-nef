<template>
    <div class="evaluation" v-if="!isHidden">
        <h1 class="display-4 font-weight-bold">Comment avez-vous aimé cet événement ?</h1>
        <div class="row">
            <div class="col p-4">
                <img :src="Bad" class="img-fluid" id="bad" @click="saveResponse(3)" alt="Responsive image">
            </div>
            <div class="col p-4">
                <img :src="Neutral" class="img-fluid" id="neutral" @click="saveResponse(2)" alt="Responsive image">
            </div>
            <div class="col p-4">
                <img :src="Good" class="img-fluid" id="good" @click="saveResponse(1)" alt="Responsive image">
            </div>
        </div>
    </div>
    <div v-else>
        <div class="d-flex align-items-center">
            <div class="p-2">
                <img :src="ThankYou" class="img-fluid" width="150" alt="Responsive image">
            </div>
            <div class="p-2">
                <h1 class="display-4 font-weight-bold">Thank you for your feedback!</h1>
            </div>
        </div>
    </div>
</template>

<script>
    const bindKey = (evt) => {
    if (evt.keyCode === 38) {
        // up arrow
        document.getElementById('good').click();
    } else if (evt.keyCode === 40) {
        // down arrow
        document.getElementById('bad').click();
    } else if (evt.keyCode === 37) {
        // left arrow
        document.getElementById('neutral').click();
    } else if (evt.keyCode === 39) {
        // right arrow
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
                Bad,
                Neutral,
                Good,
                ThankYou,
                isHidden: false,
            }
        },
        created() {
            document.addEventListener('keydown', bindKey);
        },
        methods: {
            saveResponse(response) {
                axios.post('/evaluation',  {
                    result: response
                })
                .then(response => {
                    this.isHidden = true;
                    setTimeout(() => {
                        this.isHidden = false;
                    }, 5000);
                })
                .catch(error => {
                    console.log(error);
                });
            }
        }
    }
</script>
