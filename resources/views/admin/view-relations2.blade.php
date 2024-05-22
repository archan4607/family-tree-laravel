@extends('layouts.simple.master')
@section('title', 'Autofill Datatables')

@section('css')

@endsection

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatable-extension.css') }}">
@endsection

@section('breadcrumb-title')
    <h3>Autofill Datatables</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Extension Data Tables</li>
    <li class="breadcrumb-item active">Autofill Datatables</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h3>HTML5 Export Buttons</h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="display" id="export-button">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Assign To</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td> <img class="img-fluid table-avtar"
                                                src="{{ asset('assets/images/user/11.png') }}" alt=""></td>
                                        <td>27</td>
                                        <td>2011/01/25</td>
                                        <td>$112,000</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h3 class="mb-3">Immediately Show Hidden Details</h3><span>Responsive has the ability to display
                            the details that it has hidden in a variety of different ways. Its default is to allow the end
                            user to toggle the the display by clicking on a row and showing the information in a DataTables
                            child row. At times it can be useful not to require end user interaction to display the hidden
                            data in a responsive manner, which can be done with the childRowImd-flexte display type.</span>
                    </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="display" id="show-hidden-row">
                                <thead>
                                    <tr>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                        <th>Extn.</th>
                                        <th>E-mail</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger</td>
                                        <td>Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td>5421</td>
                                        <td>t.nixon@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Garrett</td>
                                        <td>Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                        <td>8422</td>
                                        <td>g.winters@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ashton</td>
                                        <td>Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                        <td>1562</td>
                                        <td>a.cox@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cedric</td>
                                        <td>Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                        <td>6224</td>
                                        <td>c.kelly@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Airi</td>
                                        <td>Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                        <td>5407</td>
                                        <td>a.satou@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jena</td>
                                        <td>Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                        <td>3814</td>
                                        <td>j.gaines@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Quinn</td>
                                        <td>Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                        <td>9497</td>
                                        <td>q.flynn@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Charde</td>
                                        <td>Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                        <td>6741</td>
                                        <td>c.marshall@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Haley</td>
                                        <td>Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012/12/18</td>
                                        <td>$313,500</td>
                                        <td>3597</td>
                                        <td>h.kennedy@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tatyana</td>
                                        <td>Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>2010/03/17</td>
                                        <td>$385,750</td>
                                        <td>1965</td>
                                        <td>t.fitzpatrick@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Michael</td>
                                        <td>Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td>66</td>
                                        <td>2012/11/27</td>
                                        <td>$198,500</td>
                                        <td>1581</td>
                                        <td>m.silva@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Paul</td>
                                        <td>Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>64</td>
                                        <td>2010/06/09</td>
                                        <td>$725,000</td>
                                        <td>3059</td>
                                        <td>p.byrd@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Doris</td>
                                        <td>Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td>Sidney</td>
                                        <td>23</td>
                                        <td>2010/09/20</td>
                                        <td>$85,600</td>
                                        <td>3023</td>
                                        <td>d.wilder@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Angelica</td>
                                        <td>Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
                                        <td>5797</td>
                                        <td>a.ramos@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Gavin</td>
                                        <td>Joyce</td>
                                        <td>Developer</td>
                                        <td>Edinburgh</td>
                                        <td>42</td>
                                        <td>2010/12/22</td>
                                        <td>$92,575</td>
                                        <td>8822</td>
                                        <td>g.joyce@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer</td>
                                        <td>Chang</td>
                                        <td>Regional Director</td>
                                        <td>Singapore</td>
                                        <td>28</td>
                                        <td>2010/11/14</td>
                                        <td>$357,650</td>
                                        <td>9239</td>
                                        <td>j.chang@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Brenden</td>
                                        <td>Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
                                        <td>1314</td>
                                        <td>b.wagner@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Fiona</td>
                                        <td>Green</td>
                                        <td>Chief Operating Officer (COO)</td>
                                        <td>San Francisco</td>
                                        <td>48</td>
                                        <td>2010/03/11</td>
                                        <td>$850,000</td>
                                        <td>2947</td>
                                        <td>f.green@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Shou</td>
                                        <td>Itou</td>
                                        <td>Regional Marketing</td>
                                        <td>Tokyo</td>
                                        <td>20</td>
                                        <td>2011/08/14</td>
                                        <td>$163,000</td>
                                        <td>8899</td>
                                        <td>s.itou@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Michelle</td>
                                        <td>House</td>
                                        <td>Integration Specialist</td>
                                        <td>Sidney</td>
                                        <td>37</td>
                                        <td>2011/06/02</td>
                                        <td>$95,400</td>
                                        <td>2769</td>
                                        <td>m.house@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Suki</td>
                                        <td>Burks</td>
                                        <td>Developer</td>
                                        <td>London</td>
                                        <td>53</td>
                                        <td>2009/10/22</td>
                                        <td>$114,500</td>
                                        <td>6832</td>
                                        <td>s.burks@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Prescott</td>
                                        <td>Bartlett</td>
                                        <td>Technical Author</td>
                                        <td>London</td>
                                        <td>27</td>
                                        <td>2011/05/07</td>
                                        <td>$145,000</td>
                                        <td>3606</td>
                                        <td>p.bartlett@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Gavin</td>
                                        <td>Cortez</td>
                                        <td>Team Leader</td>
                                        <td>San Francisco</td>
                                        <td>22</td>
                                        <td>2008/10/26</td>
                                        <td>$235,500</td>
                                        <td>2860</td>
                                        <td>g.cortez@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Martena</td>
                                        <td>Mccray</td>
                                        <td>Post-Sales support</td>
                                        <td>Edinburgh</td>
                                        <td>46</td>
                                        <td>2011/03/09</td>
                                        <td>$324,050</td>
                                        <td>8240</td>
                                        <td>m.mccray@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Unity</td>
                                        <td>Butler</td>
                                        <td>Marketing Designer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/12/09</td>
                                        <td>$85,675</td>
                                        <td>5384</td>
                                        <td>u.butler@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Howard</td>
                                        <td>Hatfield</td>
                                        <td>Office Manager</td>
                                        <td>San Francisco</td>
                                        <td>51</td>
                                        <td>2008/12/16</td>
                                        <td>$164,500</td>
                                        <td>7031</td>
                                        <td>h.hatfield@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Hope</td>
                                        <td>Fuentes</td>
                                        <td>Secretary</td>
                                        <td>San Francisco</td>
                                        <td>41</td>
                                        <td>2010/02/12</td>
                                        <td>$109,850</td>
                                        <td>6318</td>
                                        <td>h.fuentes@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Vivian</td>
                                        <td>Harrell</td>
                                        <td>Financial Controller</td>
                                        <td>San Francisco</td>
                                        <td>62</td>
                                        <td>2009/02/14</td>
                                        <td>$452,500</td>
                                        <td>9422</td>
                                        <td>v.harrell@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Timothy</td>
                                        <td>Mooney</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>37</td>
                                        <td>2008/12/11</td>
                                        <td>$136,200</td>
                                        <td>7580</td>
                                        <td>t.mooney@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jackson</td>
                                        <td>Bradshaw</td>
                                        <td>Director</td>
                                        <td>New York</td>
                                        <td>65</td>
                                        <td>2008/09/26</td>
                                        <td>$645,750</td>
                                        <td>1042</td>
                                        <td>j.bradshaw@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Olivia</td>
                                        <td>Liang</td>
                                        <td>Support Engineer</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2011/02/03</td>
                                        <td>$234,500</td>
                                        <td>2120</td>
                                        <td>o.liang@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bruno</td>
                                        <td>Nash</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>2011/05/03</td>
                                        <td>$163,500</td>
                                        <td>6222</td>
                                        <td>b.nash@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sakura</td>
                                        <td>Yamamoto</td>
                                        <td>Support Engineer</td>
                                        <td>Tokyo</td>
                                        <td>37</td>
                                        <td>2009/08/19</td>
                                        <td>$139,575</td>
                                        <td>9383</td>
                                        <td>s.yamamoto@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Thor</td>
                                        <td>Walton</td>
                                        <td>Developer</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2013/08/11</td>
                                        <td>$98,540</td>
                                        <td>8327</td>
                                        <td>t.walton@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Finn</td>
                                        <td>Camacho</td>
                                        <td>Support Engineer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/07/07</td>
                                        <td>$87,500</td>
                                        <td>2927</td>
                                        <td>f.camacho@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Serge</td>
                                        <td>Baldwin</td>
                                        <td>Data Coordinator</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2012/04/09</td>
                                        <td>$138,575</td>
                                        <td>8352</td>
                                        <td>s.baldwin@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Zenaida</td>
                                        <td>Frank</td>
                                        <td>Software Engineer</td>
                                        <td>New York</td>
                                        <td>63</td>
                                        <td>2010/01/04</td>
                                        <td>$125,250</td>
                                        <td>7439</td>
                                        <td>z.frank@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Zorita</td>
                                        <td>Serrano</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>56</td>
                                        <td>2012/06/01</td>
                                        <td>$115,000</td>
                                        <td>4389</td>
                                        <td>z.serrano@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer</td>
                                        <td>Acosta</td>
                                        <td>Junior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>43</td>
                                        <td>2013/02/01</td>
                                        <td>$75,650</td>
                                        <td>3431</td>
                                        <td>j.acosta@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cara</td>
                                        <td>Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>2011/12/06</td>
                                        <td>$145,600</td>
                                        <td>3990</td>
                                        <td>c.stevens@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Hermione</td>
                                        <td>Butler</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2011/03/21</td>
                                        <td>$356,250</td>
                                        <td>1016</td>
                                        <td>h.butler@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Lael</td>
                                        <td>Greer</td>
                                        <td>Systems Administrator</td>
                                        <td>London</td>
                                        <td>21</td>
                                        <td>2009/02/27</td>
                                        <td>$103,500</td>
                                        <td>6733</td>
                                        <td>l.greer@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jonas</td>
                                        <td>Alexander</td>
                                        <td>Developer</td>
                                        <td>San Francisco</td>
                                        <td>30</td>
                                        <td>2010/07/14</td>
                                        <td>$86,500</td>
                                        <td>8196</td>
                                        <td>j.alexander@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Shad</td>
                                        <td>Decker</td>
                                        <td>Regional Director</td>
                                        <td>Edinburgh</td>
                                        <td>51</td>
                                        <td>2008/11/13</td>
                                        <td>$183,000</td>
                                        <td>6373</td>
                                        <td>s.decker@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Michael</td>
                                        <td>Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td>Singapore</td>
                                        <td>29</td>
                                        <td>2011/06/27</td>
                                        <td>$183,000</td>
                                        <td>5384</td>
                                        <td>m.bruce@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Donna</td>
                                        <td>Snider</td>
                                        <td>Customer Support</td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td>2011/01/25</td>
                                        <td>$112,000</td>
                                        <td>4226</td>
                                        <td>d.snider@datatables.net</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h3 class="mb-3">Full row selection</h3><span>The rowReorder.selector option provides the
                            ability to define which element in a table row will provide the row reordering handle to the end
                            user. By default only the first cell in the row will trigger the reordering action. This example
                            shows the entire row being able to start the reorder. Simply click and drag anywhere on the row.
                            Additionally, the column that defines the row order is hidden by default, making the table a
                            simple orderable list.</span>
                    </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="display" id="full-row">
                                <thead>
                                    <tr>
                                        <th>Person</th>
                                        <th>Position</th>
                                        <th>Email</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Progress</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>Accountant</td>
                                        <td>phizntrg@gmail.com</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 20%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>bahwi@att.net</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 60%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>tubesteak@mac.com</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-secondary" role="progressbar"
                                                        style="width: 60%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>kostas@yahoo.ca</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 20%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>bdthomas@optonline.net</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 60%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>mccurley@aol.com</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 20%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>pajas@icloud.com</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 20%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>payned@yahoo.com</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-secondary" role="progressbar"
                                                        style="width: 40%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>heine@mac.com</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 40%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>cmdrgravy@msn.com</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 20%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>portele@outlook.com</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 60%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>jimxugle@comcast.net</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 40%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>adityabose7@gmail.com</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 60%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>am27491@gmail.com</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 40%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2012/12/18</td>
                                        <td>$313,500</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>amarjun7@gmail.com</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 20%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2010/03/17</td>
                                        <td>$385,750</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>anuj8315@gmail.com</td>
                                        <td>London</td>
                                        <td>66</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 60%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2012/11/27</td>
                                        <td>$198,500</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>arkindia4@gmail.com</td>
                                        <td>New York</td>
                                        <td>64</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-secondary" role="progressbar"
                                                        style="width: 40%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2010/06/09</td>
                                        <td>$725,000</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>eric.ogren@gmail.com</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 40%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>eric.olsen@gmail.com</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 60%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>ersely@gmail.com</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 20%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>festim.b@gmail.com</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 60%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2011/09/03</td>
                                        <td>$345,000</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Yuri Berry</td>
                                        <td>Chief Marketing Officer (CMO)</td>
                                        <td>eric.nelson@gmail.com</td>
                                        <td>New York</td>
                                        <td>40</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 40%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2009/06/25</td>
                                        <td>$675,000</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>luciferashish@gmail.com</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 20%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Doris Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td>mysteriousWayne@t-online.de</td>
                                        <td>Sidney</td>
                                        <td>23</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 60%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2010/09/20</td>
                                        <td>$85,600</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>terribleBrent88@zonnet.nl</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-secondary" role="progressbar"
                                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Gavin Joyce</td>
                                        <td>Developer</td>
                                        <td>Samuelmagnificent@gmx.de</td>
                                        <td>Edinburgh</td>
                                        <td>42</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2010/12/22</td>
                                        <td>$92,575</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer Chang</td>
                                        <td>Regional Director</td>
                                        <td>fancyErik9@rambler.ru</td>
                                        <td>Singapore</td>
                                        <td>28</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 20%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2010/11/14</td>
                                        <td>$357,650</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>ashamedDanny@att.net</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 60%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Fiona Green</td>
                                        <td>Chief Operating Officer (COO)</td>
                                        <td>filthySummer12@hotmail.co.uk</td>
                                        <td>San Francisco</td>
                                        <td>48</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2010/03/11</td>
                                        <td>$850,000</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Shou Itou</td>
                                        <td>Regional Marketing</td>
                                        <td>mail2svenkatesh@gmail.com</td>
                                        <td>Tokyo</td>
                                        <td>20</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 20%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2011/08/14</td>
                                        <td>$163,000</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Michelle House</td>
                                        <td>Integration Specialist</td>
                                        <td>lkfcmk@gmail.com</td>
                                        <td>Sidney</td>
                                        <td>37</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 60%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2011/06/02</td>
                                        <td>$95,400</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Suki Burks</td>
                                        <td>Developer</td>
                                        <td>nk.nikhil42@gmail.com</td>
                                        <td>London</td>
                                        <td>53</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 90%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2009/10/22</td>
                                        <td>$114,500</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Prescott Bartlett</td>
                                        <td>Technical Author</td>
                                        <td>s.randhir22@gmail.com</td>
                                        <td>London</td>
                                        <td>27</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-secondary" role="progressbar"
                                                        style="width: 90%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2011/05/07</td>
                                        <td>$145,000</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Gavin Cortez</td>
                                        <td>Team Leader</td>
                                        <td>ycprasanth@gmail.com</td>
                                        <td>San Francisco</td>
                                        <td>22</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 20%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2008/10/26</td>
                                        <td>$235,500</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Martena Mccray</td>
                                        <td>Post-Sales support</td>
                                        <td>happyMandy92@shaw.ca</td>
                                        <td>Edinburgh</td>
                                        <td>46</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 20%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2011/03/09</td>
                                        <td>$324,050</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Unity Butler</td>
                                        <td>Marketing Designer</td>
                                        <td>richDaniel@ymail.com</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 90%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2009/12/09</td>
                                        <td>$85,675</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Howard Hatfield</td>
                                        <td>Office Manager</td>
                                        <td>Robertkind@alice.it</td>
                                        <td>San Francisco</td>
                                        <td>51</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 60%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2008/12/16</td>
                                        <td>$164,500</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Hope Fuentes</td>
                                        <td>Secretary</td>
                                        <td>Robertalert@laposte.net</td>
                                        <td>San Francisco</td>
                                        <td>41</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-secondary" role="progressbar"
                                                        style="width: 90%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2010/02/12</td>
                                        <td>$109,850</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Vivian Harrell</td>
                                        <td>Financial Controller</td>
                                        <td>handsomeRoy@hotmail.it</td>
                                        <td>San Francisco</td>
                                        <td>62</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 60%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2009/02/14</td>
                                        <td>$452,500</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Timothy Mooney</td>
                                        <td>Office Manager</td>
                                        <td>Mathewlively@wanadoo.fr</td>
                                        <td>London</td>
                                        <td>37</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 90%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2008/12/11</td>
                                        <td>$136,200</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jackson Bradshaw</td>
                                        <td>Director</td>
                                        <td>glamorousPhillip89@sfr.fr</td>
                                        <td>New York</td>
                                        <td>65</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 20%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2008/09/26</td>
                                        <td>$645,750</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Olivia Liang</td>
                                        <td>Support Engineer</td>
                                        <td>upsetAnthony@msn.com</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 90%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2011/02/03</td>
                                        <td>$234,500</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>shinySergio@tin.it</td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 60%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2011/05/03</td>
                                        <td>$163,500</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Zorita Serrano</td>
                                        <td>Software Engineer</td>
                                        <td>wrongSusan@terra.com.br</td>
                                        <td>San Francisco</td>
                                        <td>56</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 60%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2012/06/01</td>
                                        <td>$115,000</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jonas Alexander</td>
                                        <td>Developer</td>
                                        <td>Jennanutty@web.de</td>
                                        <td>San Francisco</td>
                                        <td>30</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 90%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2010/07/14</td>
                                        <td>$86,500</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Shad Decker</td>
                                        <td>Regional Director</td>
                                        <td>Marcmuddy@gmx.de</td>
                                        <td>Edinburgh</td>
                                        <td>51</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 60%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2008/11/13</td>
                                        <td>$183,000</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Michael Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td>poorBrittany@yahoo.com</td>
                                        <td>Singapore</td>
                                        <td>29</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 90%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2011/06/27</td>
                                        <td>$183,000</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td>lovelyEdwin77@facebook.com</td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar">
                                                    <div class="progress-bar bg-secondary" role="progressbar"
                                                        style="width: 60%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2011/01/25</td>
                                        <td>$112,000</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Email</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Progress</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.autoFill.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.colReorder.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/custom.js') }}"></script>
@endsection
