<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">


                  <h4 class="header-title m-t-0 m-b-30">Greek Channels</h4>

                        <table id="datatable-buttons" class="table table-striped table-bordered"></table>
                    </div>
                </div><!-- end col -->
            </div>
            <!-- end row -->
            <div id="add-the-channel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Add a new channel.</h4>
                        </div>
                        <div class="modal-body">
                          <form id="formadd" action="">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="field-title" class="control-label">Channel Title</label>
                                        <input type="text" class="form-control" id="field-title">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="field-region" class="control-label">Region</label>
                            <select id="field-region" class="form-control">
                              <option  value="Greece - Nationwide">Greece - Nationwide</option>
                              <option  value="Greece - Local">Greece - Local</option>
                              <option  value="Greece - WebTV">Greece - WebTV</option>
                              <option  value="World - WebTV">World - WebTV</option>
                              <option  value="Cyprus">Cyprus</option>
                              <option  value="Cyprus - WebTV">Cyprus - WebTV</option>
                            </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="field-type" class="control-label">Type</label>
                            <select id="field-type" class="form-control">
                                <option  value="General">General</option>
                                <option  value="News">News</option>
                                <option  value="Music">Music</option>
                            </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-description" class="control-label">Description / Comment</label>
                                        <input type="text" class="form-control" id="field-description">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="field-sdimage" class="control-label">SD Image</label>
                            <select id="field-sdimage" class="form-control">
                                <option value="hls">hls</option>
                                <option value="youtube">youtube</option>
                                <option value="mp4">mp4</option>
                                <option value="podcast">podcast</option>
                                <option value="ustream">ustream</option>
                                <option value="other">other</option>
                            </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="field-hdimage" class="control-label">HD Image</label>
                            <select id="field-hdimage" class="form-control">
                                <option value="0">0</option>
                                <option value="1" >1</option>
                            </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="field-hd" class="control-label">Order</label>
                            <select id="field-hd" class="form-control">
                                <option value=1>1</option>
<option value=2>2</option>
<option value=3>3</option>
<option value=4>4</option>
<option value=5>5</option>
<option value=6>6</option>
<option value=7>7</option>
<option value=8>8</option>
<option value=9>9</option>
<option value=10>10</option>
<option value=11>11</option>
<option value=12>12</option>
<option value=13>13</option>
<option value=14>14</option>
<option value=15>15</option>
<option value=16>16</option>
<option value=17>17</option>
<option value=18>18</option>
<option value=19>19</option>
<option value=20>20</option>
<option value=21>21</option>
<option value=22>22</option>
<option value=23>23</option>
<option value=24>24</option>
<option value=25>25</option>
<option value=26>26</option>
<option value=27>27</option>
<option value=28>28</option>
<option value=29>29</option>
<option value=30>30</option>
<option value=31>31</option>
<option value=32>32</option>
<option value=33>33</option>
<option value=34>34</option>
<option value=35>35</option>
<option value=36>36</option>
<option value=37>37</option>
<option value=38>38</option>
<option value=39>39</option>
<option value=40>40</option>
<option value=41>41</option>
<option value=42>42</option>
<option value=43>43</option>
<option value=44>44</option>
<option value=45>45</option>
<option value=46>46</option>
<option value=47>47</option>
<option value=48>48</option>
<option value=49>49</option>
<option value=50>50</option>
<option value=51>51</option>
<option value=52>52</option>
<option value=53>53</option>
<option value=54>54</option>
<option value=55>55</option>
<option value=56>56</option>
<option value=57>57</option>
<option value=58>58</option>
<option value=59>59</option>
<option value=60>60</option>
<option value=61>61</option>
<option value=62>62</option>
<option value=63>63</option>
<option value=64>64</option>
<option value=65>65</option>
<option value=66>66</option>
<option value=67>67</option>
<option value=68>68</option>
<option value=69>69</option>
<option value=70>70</option>
<option value=71>71</option>
<option value=72>72</option>
<option value=73>73</option>
<option value=74>74</option>
<option value=75>75</option>
                            </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="submit" value="Submit"  class="btn btn-info waves-effect waves-light">Add Stream</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.modal -->


            <div id="edit-the-channel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Edit a channel.</h4>
                        </div>
                        <div class="modal-body">
                          <form id="formedit" action="">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="field-channel-e" class="control-label">Channel</label>
                          <select id="field-channel-e" class="form-control">

                          </select>
                          </div>
                        </div>
                      </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-streamurl-e" class="control-label">Stream URL</label>
                                        <input type="text" class="form-control" id="field-streamurl-e" placeholder="http://">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="field-format-e" class="control-label">Format</label>
                            <select id="field-format-e" class="form-control">
                                <option value="hls">hls</option>
                                <option value="youtube">youtube</option>
                                <option value="mp4">mp4</option>
                                <option value="podcast">podcast</option>
                                <option value="ustream">ustream</option>
                                <option value="other">other</option>
                            </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="field-active-e" class="control-label">Active</label>
                            <select id="field-active-e" class="form-control">
                                <option value="0">0</option>
                                <option value="1" >1</option>
                            </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="field-hd-e" class="control-label">HD</label>
                            <select id="field-hd-e" class="form-control">
                                <option  value="false">false</option>
                                <option  value="true">true</option>
                            </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="submit" value="Submit"  class="btn btn-info waves-effect waves-light">Edit Stream</button>
                            <input type="hidden" value="" id="field-streamid-e"/>
                        </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.modal -->

        </div> <!-- container -->

    </div> <!-- content -->

    <footer class="footer">
        2016 © GreekTV by UPG.GR.
    </footer>

</div>
