<template>
    <div class="content">
        <el-tabs v-model="activeTab" v-loading="loading">
            <el-tab-pane label="Listado" name="list">
                <list-projects-component ref="ListProjects"></list-projects-component>
            </el-tab-pane>
        </el-tabs>
        <!-- <edit-service-component ref="EditCustomer"></edit-service-component> -->
    </div>
</template>
<script>
    import ListProjects from './ListProjects.vue'

    export default {
        components: {
            'list-projects-component': ListProjects,
        },
        data() {
            return {
                laravelData: {},
                activeTab: 'list',
                loading: false
            }
        }
    }
</script>