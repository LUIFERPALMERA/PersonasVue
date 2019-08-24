<template>
  <div>
    <md-dialog :md-active.sync="showDialog" class="md-layout md-scrollbar">
        <form novalidate class="md-layout">
            <md-card>
                <md-card-header>
                    <div class="md-title">Agregar persona</div>
                </md-card-header>

                <md-card-content>
                    <md-field>
                        <label for="cedula">Cédula</label>
                        <md-input type="text" v-model="cedula" readonly/>
                    </md-field>
                    <md-field>
                        <label for="nombre">Nombre</label>
                        <md-input type="text" v-model="nombre" readonly/>
                    </md-field>
                    <md-field>
                        <label for="apellido">Apellido</label>
                        <md-input type="text" v-model="apellido" readonly/>
                    </md-field>
                    <md-field>
                        <label for="sexo">Sexo</label>
                        <md-input type="text" v-model="sexo" readonly/>
                    </md-field>
                </md-card-content>

                <md-progress-bar md-mode="indeterminate" v-if="sending" />

                <md-card-actions>
                    <md-button class="md-primary" :disabled="sending" @click="showDialog=false">Cerrar</md-button>
                </md-card-actions>
            </md-card>

            <md-snackbar :md-active.sync="userSaved">The user {{ lastUser }} was saved with success!</md-snackbar>
        </form>
    </md-dialog>
  </div>
</template>

<script>
  export default {
    name: 'DialogCustom',
    data: () => ({
      showDialog: false,
      sexos:[{
          id:1,
          valor:"Masculino"
        },
        {
          id:2,
          valor:"Femenino"
        }
      ],
      cedula:"",
      nombre:"",
      apellido:"",
      sexo:""
    }), mounted(){
        EventBus.$on('activar-ventana-ver',data=>{
            this.cedula = data.cedula;
            this.nombre = data.nombre;
            this.apellido = data.apellido;
            this.sexo = data.nombre_sexo;
            this.showDialog = true;
        })
    }
  }
</script>

<style lang="scss" scoped>
  .md-dialog {
    max-width: 768px;
  }
  .md-card{
      width:100%;
      margin-top:10px;
      padding:5px;
  }
</style>