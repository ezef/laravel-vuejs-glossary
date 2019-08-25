<template>
  <b-card header="Card with list group">
    <b-list-group>
      <b-list-group-item v-for="glossary in glossaries">{{glossary.id}} | {{glossary.name}} | {{glossary.language.name}}</b-list-group-item>

    </b-list-group>

    <p class="card-text mt-2">
      Quis magna Lorem anim amet ipsum do mollit sit cillum voluptate ex nulla tempor. Laborum
      consequat non elit enim exercitation cillum aliqua consequat id aliqua. Esse ex consectetur
      mollit voluptate est in duis laboris ad sit ipsum anim Lorem.
    </p>
  </b-card>
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