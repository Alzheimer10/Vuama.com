<template>
    <div class="content" v-if="laravelData">
      <el-table :data="laravelData.data" stripe v-loading="loading" class="w-100">
          <el-table-column  type="index">
            <template slot-scope="scope">
              <span>{{ scope.row.id }}</span>
            </template>
          </el-table-column>

          <el-table-column label="titulo" prop="scope.row.title" sortable>
            <template slot-scope="scope">
              <span>{{scope.row.title }}</span>
            </template>
          </el-table-column>

          <el-table-column label="tipo" prop="scope.row.type" sortable>
            <template slot-scope="scope">
              <span>{{scope.row.type }}</span>
            </template>
          </el-table-column>

          <el-table-column label="tipo" prop="scope.row.schedule" sortable>
            <template slot-scope="scope">
              <span>{{scope.row.schedule }}</span>
            </template>
          </el-table-column>

          <el-table-column label="Estatus" prop="scope.row.status" sortable>
            <template slot-scope="scope">
              <span>{{scope.row.status | status }}</span>
            </template>
          </el-table-column>

          <el-table-column label="Operaciones">
            <template slot-scope="scope">
              <el-button size="mini" @click="handleEdit(scope.row)">Editar</el-button>
              <el-button size="mini" type="danger" @click="DialogDelete(scope.row.id)">Eliminar</el-button>
            </template>
          </el-table-column>

      </el-table>
      <pagination :data="laravelData" v-on:pagination-change-page="getLaravelData" :limit="2">
          <span slot="prev-nav">&lt;</span>
          <span slot="next-nav">&gt;</span>
      </pagination>
    </div>
</template>
<script>
  export default {
    data() {
      return {
        laravelData: {},
        loading: true,
        DialogVisibleDelete: false,
        id_delete: '',
      }
    },
    created() {
      this.getLaravelData();
    },
    methods: {
        getLaravelData(page) {
          if (typeof page === 'undefined')
              page = 1;
          this.$routeLaravel('api.projects.index').get()
          .then(response => {
            this.laravelData = response.data;
            this.loading = false;
          }).catch(response => {
            this.$message({  message: 'Ocurrio un error',  showClose: true,  type: 'error'});
            console.error(response.data);
          })
        },
        refresh(){
          this.getLaravelData();
        },
    }
  }
</script>