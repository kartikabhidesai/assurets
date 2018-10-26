var Services=function(){
   
    var serviceInfo=function(){
                var dataArr = {};
                var columnWidth = {};
                var columnWidth = {"width": "20%", "targets": 8};               
                var arrList = {
                    'tableID': '#datatableServices',
                    'ajaxURL': baseurl + "callsajaxAction",
                    'ajaxAction': 'datatableServices',
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
           serviceInfo(); 
        },
    }
}();