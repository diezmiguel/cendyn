<template>
<div v-if="loading">
            <spinner-component></spinner-component>
</div>
<div class="container" v-else>
    <modal-component v-if="showModal" title="Displaying posts for userID:" :userId="userId" @toggle-modal="toggleModal">

        <table class="table table-striped" v-if="posts.length">
            <thead>
                <th scope="col">PostId</th>
                <th scope="col">Title</th>
                <th scope="col">Comment</th>
            </thead>

            <tbody>
                <tr v-for="post in posts" :key="post.id">
                    <td>{{post.id}}</td>
                    <td>{{post.title}}</td>
                    <td>{{post.body}}</td>
                </tr>
            </tbody>
        </table>
        <span v-else class="errMsg">No posts associated for this user.</span>
    </modal-component>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped">
  <thead>
      <tr>
          <th colspan="6">
              <i class="fa fa-user-friends"></i>
                Person List<button class="btn btn-success btn-sm refresh-btn-align" @click="getPersonList()">Refresh List</button> Collection Size: <input type="text" v-model='limit' class="limit-width" > <span v-if="showError" class="errMsg">{{this.errorMsg}}</span><spinner-component v-if="postLoading"></spinner-component></th>
      </tr>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Address</th>
      <th scope="col">Job title</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="person in persons" :key="person.id">
      <th scope="row">{{person.id}}</th>
      <td>{{person.first_name}}</td>
      <td>{{person.last_name}}</td>
      <td>{{person.city}}</td>
      <td> {{person.job_title}}</td>
      <td><button class="btn btn-primary btn-sm" @click="showPost(person.id)">View Posts</button></td>
    </tr>
  </tbody>
</table>
        </div>
    </div>
</div>

</template>
<style scoped>
.refresh-btn-align {
    margin-left: 3%;
}
.limit-width{
    width:35px;
}
.errMsg{
    color:red;
}
</style>
<script>

    export default {
        name:'person',
        data ()
        {
            return {
                persons: [],
                loading:true,
                showpost:false,
                posts: null,
                showModal:false,
                userId:null,
                postLoading:false,
                limit:10,
                errorMsg:"",
                showError:false
            }
        },
        mounted() {
            this.getPersonList();
        },
         methods: {
             getPersonList()
             {
                this.loading = true;
                this.showError=false;
                axios
                .get('http://localhost:8000/api/person/index?limit='+this.limit)
                .then(response => (this.persons = response.data))
                .catch(error=>{this.showError=true;
                this.errorMsg = error.response.data.error.message;
                })
                .finally(()=>this.loading = false)

             },
             showPost(PersonId)
             {
                this.postLoading=true;
                this.userId=PersonId;
                axios
                .get('http://localhost:8000/api/person/show/'+ PersonId)
                .then(response => (this.posts = response.data))
                .finally(()=>{this.showModal=true;
                this.postLoading=false;
                });
             },
            toggleModal()
            {
                this.showModal = !this.showModal;
            },
            listener() {
                this.toggleModal();
            }
         }
    }
</script>
