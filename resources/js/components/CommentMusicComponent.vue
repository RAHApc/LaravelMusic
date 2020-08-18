<style lang="scss">
    .fade-enter-active, .fade-leave-active {
        transition: opacity 4s ease-out;
    }

    .fade-leave-active {
        transition: opacity 4s ease-out;
    }

    .fade-enter, .fade-leave-to {
        opacity: 0;
    }

    .fade-leave-to {
        opacity: 0;
    }
</style>

<template>
    <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12 col-12">
        <transition name="fade">
            <div class="alert alert-success" v-if="saved">
                <strong>موفقیت آمیز!</strong> نظر شما ثبت شد.
            </div>
        </transition>

<!--        <div v-if="errors">-->
<!--            {{errors.name}}-->
<!--            <div v-for="(v, k) in errors" :key="k">-->
<!--                <p v-for="errors in v">-->
<!--                    {{ v }}-->

<!--                </p>-->
<!--            </div>-->
<!--        </div>-->

        <form id="formCommentSingleMusic" method="post" @submit.prevent="onSubmit">
            <input type="hidden" :value="comment.id=musics.id" id="musicID"
                   name="id">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-pos">
                        <div class="form-group i-name">

                            <input type="text"
                                   class="form-control"
                                   v-model="comment.name"
                                   id="first_name"
                                   placeholder="نام کاربری*"
                                   autocomplete="off">


                        </div>
                    </div>
                </div>

                <!-- /.col-md-12 -->
                <div class="col-md-12">
                    <div class="form-m">
                        <div class="form-group i-message">

                                                            <textarea class="form-control" v-model="comment.body"
                                                                      rows="5" id="messageTen"
                                                                      placeholder=" پیام*"></textarea>


                        </div>
                    </div>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <div class="tb_es_btn_wrapper">
                <button type="submit" class="submitForm"
                        style="font-size: 1.5em"> ارسال
                </button>
            </div>
        </form>
    </div>

</template>

<script>
    export default {
        props: ['music'],
        data() {
            return {
                musics: this.music,
                errors: [],
                saved: false,
                comment: {
                    id: null,
                    name: null,
                    body: null,
                }
            }
        },
        methods: {
            onSubmit() {
                axios.post('/music/comment', this.comment)
                    .then((response) => this.setSuccessMessage())
                    .catch((error) => this.setErrors(error));
            },

            setErrors(response) {
                this.errors = response.data.errors;
            },

            setSuccessMessage() {
                this.reset();
                this.saved = true;
            },

            reset() {
                this.errors = [];
                this.comment = {name: null, body: null};
            }

        }
    }
</script>


