<template>
    <div class="navi_searchbar_wrapper">
        <div>
                <i class="flaticon-magnifying-glass"></i>
            <input type="text" id="searchAMtxt" v-model="searchValue.item" v-on:keyup="searchItem()" style="width: 70%;" placeholder="دنبال چه آلبومی میگردی؟">
        </div>
        <div style="width: 324px;height: auto;color: #000000;border-radius: 16px;background: #fff;margin: 51px 2px;" v-if="show">
            <ul>
                <li v-for="result in results" style="padding: 10px 51px">
                    <a :href="'/album/'+slug(result.name)">{{result.name}} - {{result.singer.name}}</a>
                </li>
            </ul>
        </div>
    </div>
</template>
<script>
    export default {
        data(){
          return{
              searchValue:{
                  item:null
              },
              results:[],
              show:false
          }
        },
        methods:{
            searchItem(){
                if(this.searchValue.item!='') {
                    axios.post('/search', this.searchValue)
                        .then((response) => this.successResult(response))
                        .catch((error) => console.log(error));
                }else {
                    this.show=false;
                }
            },
            successResult(response){
                if(response.data.length!=0)
                {
                    this.show=true;
                    this.results=response.data.t;
                }
            },
            slug(value){
                return value.replace(' ','-');
            }
        },
    }
</script>
