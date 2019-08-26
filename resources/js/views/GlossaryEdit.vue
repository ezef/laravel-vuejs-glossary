<template>
	<div>
  <b-card header="Your glossaries">
    <b-list-group>
 		<b-list-group-item href="#" v-for="glossary in glossaries">
    	<div class="d-flex w-100 justify-content-between">
	      	<h5 class="mb-1">{{glossary.id}} | {{glossary.name}}</h5>
	      	<small>Updated: {{glossary.updated_ago}}</small>
    	</div>
		<small>Glossary language: {{glossary.language.name}}</small>


      </b-list-group-item>

    </b-list-group>
  </b-card>
</div>
</template>
<script>
import api from '../api/glossary';
    export default {
	  data() {
	    return {glossaries: [],}
	  },
	  created() {
	  	api.all().then((response) =>{
	  		console.log(response.data.data);
	  		this.glossaries = response.data.data;
	  		});
	  },

    }
</script>