<template>
    <div class="container">
        <div v-if="loading">
            <spinner-component></spinner-component>
        </div>
        <div class="row" v-else>
        <span v-if="hasError" class="errMsg">Error loading Quote. Try again later.</span>
                <h1 v-else><span class="day_quote_title">-- Quote of the day --</span> <button class="btn btn-sm" @click="getQuote()"><span class="fa fa-sync" title="get New Quote"></span></button>
<br />

                    <img src="/imgs/logo.jpeg" width=80px>{{ this.quote }}</h1>
        </div>

    </div>
</template>
<style scoped>
.day_quote_title{
    font-size:30%;
}
.errMsg{
    color:red;
}
</style>
<script>
    export default {
        name:'quote',
        data: () =>
        {
            return {
                quote: null,
                loading: false,
                hasError:false
            }
        },
        mounted() {

            this.getQuote();
        },
        methods: {
            getQuote() {
                this.loading=true;
        axios
        .get('http://localhost:8000/api/quote')
        .then(response => (this.quote = response.data.quote))
        .catch(error=>{
            this.hasError=true;
        })
        .finally(()=> this.loading = false)
            }
        }
    }
</script>
