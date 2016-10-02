var handleDataTableButtons = function () {
    0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
		"ajax": {
            "url": "http://greektv.upg.gr/api/?type=greekchannels",
            "dataSrc": "data"

        },
		"columns": [
            {"data": "id", "title": "ID"},
			      {"data": "title", "title": "Title"},
            {"data": "region", "title": "Region"},
			      {"data": "type", "title": "Type"},
            {"data": "description", "title": "Description"},
            {"data": "sd_image", "title": "SD img"},
            {"data": "hd_image", "title": "HD img"},
            {"data": "channel_order", "title": "Order"},
            {"data": null, "title": "Actions"}

        ],
        colReorder: true,
        dom: "Bfrtip",
        "columnDefs": [ {
            "targets": [ 5 ],
            "render": function ( data, type, full, meta ) {
            return '<a href="http://greektv.upg.gr/img/'+data+'" target="blank">'+data+'</a>';
            }
        },
        {
            "targets": [ 6 ],
            "render": function ( data, type, full, meta ) {
            return '<a href="http://greektv.upg.gr/img/'+data+'" target="blank">'+data+'</a>';
            }
        },
        {
            "targets": [8],
            render: function ( row ) {
              //with delete
        //    return '<a onclick="return confirm(\'Are you sure you want to re-queueue this report?\');" title="Requeues the report - Report will be reprocessed when the importer runs again" href="../api/?type=re-process-report&report_id='+row.id+'&report_client='+theclientjs+'">Requeue</a> - <a onclick="return confirm(\'Are you sure you want to move this report to the unknown ones?\');" title="Moves the report to the unknown status and folder" href="../api/?type=move-to-unknown&report_id'+row.id+'=&report_client='+theclientjs+'">?</a> - <a onclick="return confirm(\'Are you sure you want to delete this report? This is irreversible!\'); title ="Deletes the report - FOREVER" href="../api/?type=delete-from-drive&report_id='+row.id+'&report_client='+theclientjs+'">Delete</a>';
        //with no confirmation dialog
  return '<a href="">Edit</a>';

        //normal - no delete
  //return '<a onclick="return confirm(\'Are you sure you want to re-queueue this report?\');" title="Requeues the report - Report will be reprocessed when the importer runs again" href="../api/?type=re-process-report&report_id='+row.id+'&report_client='+theclientjs+'">Requeue</a> - <a onclick="return confirm(\'Are you sure you want to move this report to the unknown ones?\');" title="Moves the report to the unknown status and folder" href="../api/?type=move-to-unknown&report_id'+row.id+'=&report_client='+theclientjs+'">?</a>';
          }
        } ],
		"bProcessing": true,
    "iDisplayLength": 15,
		"order": [[ 7, "desc" ]],
        buttons: [{extend: "copy", className: "btn-sm"}, {extend: "csv", className: "btn-sm"}, {
            extend: "excel",
            className: "btn-sm"
        }, {extend: "pdf", className: "btn-sm"}, {extend: "print", className: "btn-sm"}
],
        responsive: !0
    })
},

TableManageButtons = function () {"use strict"; return { init: function () { handleDataTableButtons()  } }}();
TableManageButtons.init();
jQuery(document).ready(function() {
console.log(name);

});
