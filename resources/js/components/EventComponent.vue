<template>
    <div>
        <div class="prs_ec_ue_timer_wrapper">
            <div v-if="showEventEnd">
                <h1 :class="{showText:showEventEnd}">زمان به اتمام رسید.</h1>
            </div>
            <div v-if="!showEventEnd">
                <countdown :time="EventTime()">
                    <template slot-scope="props">
                        <div id="clockdiv">
                            <div><span id="days">{{ props.days }}</span>
                                <div class="smalltext">روزها</div>
                            </div>
                            <div><span id="hours">{{ props.hours }}</span>
                                <div class="smalltext">ساعت ها</div>
                            </div>
                            <div><span id="minutes">{{ props.minutes }}</span>
                                <div class="smalltext">مین ها</div>
                            </div>
                            <div><span id="seconds">{{ props.seconds }}</span>
                                <div class="smalltext">ثانیه</div>
                            </div>
                        </div>
                    </template>
                </countdown>
            </div>
        </div>

    </div>

</template>

<script>
    export default {
        props: ['event'],
        data() {
            return {
                eventTime: this.event.dateStart,
                showEventEnd: false,
                // Date:new Date()
            }
        },
        methods:{
            EventTime() {
                var myDate = this.eventTime;
                myDate = myDate.split("-");

                if (new Date(newDate).getTime() - new Date()<0) {
                    this.showEventEnd = true;
                }
                else {
                    var newDate = myDate[1] + "/" + myDate[2] + "/" + myDate[0];
                    return (new Date(newDate).getTime() - new Date());
                }
            }
        },
        computed: {

        },
        mounted() {
            // var myDate = this.eventTime;
            // myDate = myDate.split("-");
            // var newDate = myDate[1] + "/" + myDate[2] + "/" + myDate[0];
            // console.log(new Date(newDate).getTime() - new Date());

        }
    }
</script>

<style scoped lang="sass">
    .showText{
        color: #fa5840;
       font-size: 30px;
       margin: 30% 40% 0 0;
        filter: blur(1.5px);
    }

</style>
