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
              return '<a href="#" class="formedit" channelid="'+row.id+'" title="'+row.title+'" region="'+row.region+'" type="'+row.type+'" description="'+row.description+'" sdimage="'+row.sd_image+'" hdimage="'+row.hd_image+'" order="'+row.channel_order+'">Edit</a> - <a onclick="return confirm(\'Are you sure you want to delete this channel?\');" href="../api/?type=deletechannel&channelid='+row.id+'">Delete</a>';

          }
        } ],
		"bProcessing": true,
    "iDisplayLength": 15,
		"order": [[ 7, "desc" ]],
        buttons: [{extend: "copy", className: "btn-sm"}, {extend: "csv", className: "btn-sm"}, {
            extend: "excel",
            className: "btn-sm"
        }, {extend: "pdf", className: "btn-sm"}, {extend: "print", className: "btn-sm"},
        {text: 'Add a new channel',className: "btn-sm",action: function ( e, dt, node, config ) {
          $('#add-the-channel').modal('show');
          e.preventDefault();
        }}
],
        responsive: !0
    })
},

TableManageButtons = function () {"use strict"; return { init: function () { handleDataTableButtons()  } }}();
TableManageButtons.init();
jQuery(document).ready(function() {

});
