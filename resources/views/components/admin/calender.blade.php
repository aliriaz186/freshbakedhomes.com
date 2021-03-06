<div class="card bg-gradient-success" style="position: relative; left: 0px; top: 0px;">
    <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

        <h3 class="card-title">
            <i class="far fa-calendar-alt"></i>
            Calendar
        </h3>
        <!-- tools card -->
        <div class="card-tools">
            <!-- button with a dropdown -->
            <div class="btn-group">
                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"
                    data-offset="-52">
                    <i class="fas fa-bars"></i></button>
                <div class="dropdown-menu" role="menu">
                    <a href="#" class="dropdown-item">Add new event</a>
                    <a href="#" class="dropdown-item">Clear events</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">View calendar</a>
                </div>
            </div>
            <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <!-- /. tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body pt-0">
        <!--The calendar -->
        <div id="calendar" style="width: 100%">
            <div class="bootstrap-datetimepicker-widget usetwentyfour">
                <ul class="list-unstyled">
                    <li class="show">
                        <div class="datepicker">
                            <div class="datepicker-days" style="">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th class="prev" data-action="previous"><span class="fa fa-chevron-left"
                                                    title="Previous Month"></span></th>
                                            <th class="picker-switch" data-action="pickerSwitch" colspan="5"
                                                title="Select Month">February 2021</th>
                                            <th class="next" data-action="next"><span class="fa fa-chevron-right"
                                                    title="Next Month"></span></th>
                                        </tr>
                                        <tr>
                                            <th class="dow">Su</th>
                                            <th class="dow">Mo</th>
                                            <th class="dow">Tu</th>
                                            <th class="dow">We</th>
                                            <th class="dow">Th</th>
                                            <th class="dow">Fr</th>
                                            <th class="dow">Sa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-action="selectDay" data-day="01/31/2021" class="day old weekend">31
                                            </td>
                                            <td data-action="selectDay" data-day="02/01/2021" class="day">1</td>
                                            <td data-action="selectDay" data-day="02/02/2021" class="day">2</td>
                                            <td data-action="selectDay" data-day="02/03/2021" class="day">3</td>
                                            <td data-action="selectDay" data-day="02/04/2021" class="day">4</td>
                                            <td data-action="selectDay" data-day="02/05/2021" class="day">5</td>
                                            <td data-action="selectDay" data-day="02/06/2021" class="day weekend">6</td>
                                        </tr>
                                        <tr>
                                            <td data-action="selectDay" data-day="02/07/2021" class="day weekend">7</td>
                                            <td data-action="selectDay" data-day="02/08/2021" class="day">8</td>
                                            <td data-action="selectDay" data-day="02/09/2021" class="day">9</td>
                                            <td data-action="selectDay" data-day="02/10/2021" class="day">10</td>
                                            <td data-action="selectDay" data-day="02/11/2021" class="day">11</td>
                                            <td data-action="selectDay" data-day="02/12/2021" class="day">12</td>
                                            <td data-action="selectDay" data-day="02/13/2021" class="day weekend">13
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-action="selectDay" data-day="02/14/2021" class="day weekend">14
                                            </td>
                                            <td data-action="selectDay" data-day="02/15/2021" class="day">15</td>
                                            <td data-action="selectDay" data-day="02/16/2021" class="day">16</td>
                                            <td data-action="selectDay" data-day="02/17/2021" class="day">17</td>
                                            <td data-action="selectDay" data-day="02/18/2021" class="day">18</td>
                                            <td data-action="selectDay" data-day="02/19/2021" class="day">19</td>
                                            <td data-action="selectDay" data-day="02/20/2021" class="day weekend">20
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-action="selectDay" data-day="02/21/2021" class="day weekend">21
                                            </td>
                                            <td data-action="selectDay" data-day="02/22/2021" class="day">22</td>
                                            <td data-action="selectDay" data-day="02/23/2021" class="day">23</td>
                                            <td data-action="selectDay" data-day="02/24/2021" class="day">24</td>
                                            <td data-action="selectDay" data-day="02/25/2021" class="day">25</td>
                                            <td data-action="selectDay" data-day="02/26/2021" class="day active today">
                                                26</td>
                                            <td data-action="selectDay" data-day="02/27/2021" class="day weekend">27
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-action="selectDay" data-day="02/28/2021" class="day weekend">28
                                            </td>
                                            <td data-action="selectDay" data-day="03/01/2021" class="day new">1</td>
                                            <td data-action="selectDay" data-day="03/02/2021" class="day new">2</td>
                                            <td data-action="selectDay" data-day="03/03/2021" class="day new">3</td>
                                            <td data-action="selectDay" data-day="03/04/2021" class="day new">4</td>
                                            <td data-action="selectDay" data-day="03/05/2021" class="day new">5</td>
                                            <td data-action="selectDay" data-day="03/06/2021" class="day new weekend">6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-action="selectDay" data-day="03/07/2021" class="day new weekend">7
                                            </td>
                                            <td data-action="selectDay" data-day="03/08/2021" class="day new">8</td>
                                            <td data-action="selectDay" data-day="03/09/2021" class="day new">9</td>
                                            <td data-action="selectDay" data-day="03/10/2021" class="day new">10</td>
                                            <td data-action="selectDay" data-day="03/11/2021" class="day new">11</td>
                                            <td data-action="selectDay" data-day="03/12/2021" class="day new">12</td>
                                            <td data-action="selectDay" data-day="03/13/2021" class="day new weekend">13
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="datepicker-months" style="display: none;">
                                <table class="table-condensed">
                                    <thead>
                                        <tr>
                                            <th class="prev" data-action="previous"><span class="fa fa-chevron-left"
                                                    title="Previous Year"></span></th>
                                            <th class="picker-switch" data-action="pickerSwitch" colspan="5"
                                                title="Select Year">2021</th>
                                            <th class="next" data-action="next"><span class="fa fa-chevron-right"
                                                    title="Next Year"></span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="7"><span data-action="selectMonth"
                                                    class="month">Jan</span><span data-action="selectMonth"
                                                    class="month active">Feb</span><span data-action="selectMonth"
                                                    class="month">Mar</span><span data-action="selectMonth"
                                                    class="month">Apr</span><span data-action="selectMonth"
                                                    class="month">May</span><span data-action="selectMonth"
                                                    class="month">Jun</span><span data-action="selectMonth"
                                                    class="month">Jul</span><span data-action="selectMonth"
                                                    class="month">Aug</span><span data-action="selectMonth"
                                                    class="month">Sep</span><span data-action="selectMonth"
                                                    class="month">Oct</span><span data-action="selectMonth"
                                                    class="month">Nov</span><span data-action="selectMonth"
                                                    class="month">Dec</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="datepicker-years" style="display: none;">
                                <table class="table-condensed">
                                    <thead>
                                        <tr>
                                            <th class="prev" data-action="previous"><span class="fa fa-chevron-left"
                                                    title="Previous Decade"></span></th>
                                            <th class="picker-switch" data-action="pickerSwitch" colspan="5"
                                                title="Select Decade">2020-2029</th>
                                            <th class="next" data-action="next"><span class="fa fa-chevron-right"
                                                    title="Next Decade"></span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="7"><span data-action="selectYear"
                                                    class="year old">2019</span><span data-action="selectYear"
                                                    class="year">2020</span><span data-action="selectYear"
                                                    class="year active">2021</span><span data-action="selectYear"
                                                    class="year">2022</span><span data-action="selectYear"
                                                    class="year">2023</span><span data-action="selectYear"
                                                    class="year">2024</span><span data-action="selectYear"
                                                    class="year">2025</span><span data-action="selectYear"
                                                    class="year">2026</span><span data-action="selectYear"
                                                    class="year">2027</span><span data-action="selectYear"
                                                    class="year">2028</span><span data-action="selectYear"
                                                    class="year">2029</span><span data-action="selectYear"
                                                    class="year old">2030</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="datepicker-decades" style="display: none;">
                                <table class="table-condensed">
                                    <thead>
                                        <tr>
                                            <th class="prev" data-action="previous"><span class="fa fa-chevron-left"
                                                    title="Previous Century"></span></th>
                                            <th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090
                                            </th>
                                            <th class="next" data-action="next"><span class="fa fa-chevron-right"
                                                    title="Next Century"></span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="7"><span data-action="selectDecade" class="decade old"
                                                    data-selection="2006">1990</span><span data-action="selectDecade"
                                                    class="decade" data-selection="2006">2000</span><span
                                                    data-action="selectDecade" class="decade active"
                                                    data-selection="2016">2010</span><span data-action="selectDecade"
                                                    class="decade active" data-selection="2026">2020</span><span
                                                    data-action="selectDecade" class="decade"
                                                    data-selection="2036">2030</span><span data-action="selectDecade"
                                                    class="decade" data-selection="2046">2040</span><span
                                                    data-action="selectDecade" class="decade"
                                                    data-selection="2056">2050</span><span data-action="selectDecade"
                                                    class="decade" data-selection="2066">2060</span><span
                                                    data-action="selectDecade" class="decade"
                                                    data-selection="2076">2070</span><span data-action="selectDecade"
                                                    class="decade" data-selection="2086">2080</span><span
                                                    data-action="selectDecade" class="decade"
                                                    data-selection="2096">2090</span><span data-action="selectDecade"
                                                    class="decade old" data-selection="2106">2100</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </li>
                    <li class="picker-switch accordion-toggle"></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>