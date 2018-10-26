var User=function(){
    var userInfo=function(){
         var dataArr = {};
                var columnWidth = {};
                var columnWidth = {"width": "20%", "targets":6};               
                var arrList = {
                    'tableID': '#datatableUser',
                    'ajaxURL': baseurl + "callsajaxAction",
                    'ajaxAction': 'datatableUser',
                    'postData': dataArr,
                    'hideColumnList': [],
                    'noSearchApply': [0],
                    'noSortingApply': [0],
                    'defaultSortColumn': 0,
                    'defaultSortOrder': 'desc',
                    'setColumnWidth': columnWidth
                };
               
        getDataTable(arrList);
    };
    
    return{
        init:function(){
           userInfo(); 
        },
    }
}();