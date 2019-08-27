<template>
<div>
	<b-form @submit.prevent="onSubmit($event)" >
		<b-form-group id="input-group-2" label="Glossary Name:" label-for="input-2">
        	<b-form-input :disabled="saving" v-model="glossary.name" required placeholder="Enter a name for the glossary"></b-form-input>
      	</b-form-group>
      	<b-form-group id="input-group-3" label="Glossary Language:" label-for="input-3">
        	<b-form-select id="input-3" v-model="glossary.language.id" :options="languages" :disabled="saving" required></b-form-select>
      	</b-form-group>
      	<b-button :disabled="saving" >Cancel</b-button>
      	<b-button @click.prevent="save($event)" :disabled="saving">Save</b-button>

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
	    	languages: [{text:'Select One', value: null} ],
	    	saving:false,
	    }
	  },
	  created() {
	  	api.find(this.$route.params.id).then((response) =>{
	  		this.glossary = response.data.data;
	  		});
	  	apiLanguage.all().then((response) => {
	  		response.data.data.map((value, key) => {
	  			this.languages.push({text:value.name,value:value.id});
	  		})
	  	});
	  },
	  methods:{
	  	save(event){
	  		if (this.glossary.language.id != null){
	  			this.saving = true;
	  		api.update(this.glossary.id, this.glossary).then((response) =>{
	  			this.$router.push({name:'glossaries'})
	  		});
	  		}
	  	}
	  }

    }
</script>