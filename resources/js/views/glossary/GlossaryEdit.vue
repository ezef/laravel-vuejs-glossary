<template>
<div>
	<b-form @submit.prevent="onSubmit($event)" >
		<b-form-group id="input-group-2" label="Glossary Name:" label-for="input-2">
        	<b-form-input v-model="glossary.name" required placeholder="Enter a name for the glossary"></b-form-input>
      	</b-form-group>
      	<b-form-group id="input-group-3" label="Food:" label-for="input-3">
        	<b-form-select id="input-3" v-model="glossary.language.id" :options="languages" required></b-form-select>
      	</b-form-group>

	</b-form>

</div>
</template>
<script>
import api from '../../api/glossary';
import apiLanguage from '../../api/language';
    export default {
	  data() {
	    return {
	    	glossary: {
	    		id: 0,
	    		name: '',
	    		language:{id:null},
	    	},
	    	languages: [{text:'Select One', value: null}, {text:'Spanish', value:1},{text:'English', value:2} ]
	    }
	  },
	  created() {
	  	console.log(this.$route.params.id)
	  	api.find(this.$route.params.id).then((response) =>{
	  		console.log(response.data.data);
	  		this.glossary = response.data.data;
	  		});
	  },

    }
</script>