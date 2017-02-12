<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="rpc.js"></script>
<script>
$.jsonRPC.setup({
  endPoint: 'http://xmdcoin4.cloudapp.net:63667/json_rpc',
  namespace: 'xmd'
});

var method = getblockheaderbyhash;
var params =
$.jsonRPC.request(method, {
  params: ("hash", "0f5cd7b89c8d25bab8a033e87e4e93225f8105de1572fe31f7f6ecb48363d232"),
  success: function(result) {
console.log(result);
  },
  error: function(result) {
    console.log(result);
  }
});



</script>
