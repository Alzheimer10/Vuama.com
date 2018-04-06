<template>
	<!-- END BEGIN PROFILE SIDEBAR -->
	<el-tabs :tab-position="tabPosition" v-model="activeTab" v-loading="loading" class="container">
	    <!-- PERSONAL INFO TAB -->
	    <el-tab-pane label="Perfil" name="Profile">
	    	<profile-customer-component @account:user="userData" :user="user"  ref="informationComponent" :route="route"></profile-customer-component>
	    </el-tab-pane>
	    
	    <el-tab-pane label="Información" name="information">
	    	<information-customer-component></information-customer-component>
	    </el-tab-pane>

	    <el-tab-pane label="Contraseña" name="password">
	    	<password-customer-component></password-customer-component>
	    </el-tab-pane>

	    <el-tab-pane label="Configuración" name="config">
	    	<config-customer-component></config-customer-component>
	    </el-tab-pane>

	    <el-tab-pane label="Saldo" name="balance">
	    	<balance-customer-component></balance-customer-component>
	    </el-tab-pane>

	    <el-tab-pane label="Proyectos" name="projects">
	    	<projects-customer-component></projects-customer-component>
	    </el-tab-pane>
	</el-tabs>
</template>
<style>
	.el-tabs__item {
    font-size: 1.1rem;
    text-align: center;
    margin: auto;
    padding: 0px 10px;
}
</style>
<script>
    import InformationCustomer  from './InformationCustomer.vue'
    import PasswordCustomer  from './PasswordCustomer.vue'
    import ProfileCustomer  from './ProfileCustomer.vue'
    import ConfigCustomer  from './ConfigCustomer.vue'
    import ProjectsCustomer  from './ProjectsCustomer.vue'
    import BalanceCustomer  from './BalanceCustomer.vue'
    export default {
        props: ['user','route'],
        components: {
            'information-customer-component': InformationCustomer,
            'password-customer-component': PasswordCustomer,
            'profile-customer-component': ProfileCustomer,
            'config-customer-component': ConfigCustomer,
            'projects-customer-component': ProjectsCustomer,
            'balance-customer-component': BalanceCustomer
        },
        data() {
            return {
            	tabPosition: 'top',
                activeTab: 'Profile',
                loading: false
			}
		},
		mounted() {
			console.log(this.$root.user);
		},
		methods:{
			userData(){
				this.$refs.informationComponent.user = this.user;
			},

		}
	}
</script>