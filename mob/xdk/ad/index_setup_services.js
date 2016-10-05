var data_views   = { group:[], single:[], bindings:{}};
















data_views.group.push({"model":{"title":null,"description":null,"link":null,"category":null,"image":null,"imagehd":null},"child":".uib_w_3","parent":".uib_w_2"});
/* prepare controllers */

data_support.prepare_mvc(".uib_w_3", "intel.xdk.services.greektvrss", ["rss","channel","item"], "standard-list", data_views);
