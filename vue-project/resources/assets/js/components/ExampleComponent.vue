<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        <ul>
                            <li v-for="item in items">
                                {{item.name}}
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                items:[
                    {name : 'oscar'},
                    {name : 'pedro'},
                    {name : 'luis'}
                ],
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
