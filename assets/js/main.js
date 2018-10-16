var app = new Vue({
    el: '#main',
    data: {
        main_dir: [],
        dir_list: [],
        finds: [],
        userText: ''
    },
    mounted: [
        function () {
            var self = this;
            $.ajax({
                url: './assets/php/fileValidate.php',
                method: 'GET',
                datatype: 'json',
                success: function (files) {
                    self.main_dir = JSON.parse(files);
                    console.log("Success");
                    console.log(self.main_dir);
                },
                error: function (err) {
                    console.log(err);
                }
            })
        },
        function() {
            var self = this;
            $.ajax({
                url: './assets/php/listValidate.php',
                method: 'GET',
                datatype: 'json',
                success: function (files) {
                    self.dir_list = JSON.parse(files);
                    console.log("Success");
                    console.log(self.dir_list);
                },
                error: function (err) {
                    console.log(err);
                }
            })
        }
    ],
    methods: {
        textSearch: function() {
            var self = this;
            $(document).ready(function() {
                $("#search-input").autocomplete({
                    source: self.dir_list,
                });
            })
        }
    }
        
})