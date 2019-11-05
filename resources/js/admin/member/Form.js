import AppForm from '../app-components/Form/AppForm';

Vue.component('member-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                surname:  '' ,
                email:  '' ,
                birthday:  '' ,
                department:  '' ,
                position:  '' ,
                
            }
        }
    }

});