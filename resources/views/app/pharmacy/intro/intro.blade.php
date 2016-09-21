<div class="page-content-inner">
    <div class="row">
        <section class="panel">
            <div class="panel-heading">
                <h4 class="color-primary">약제실</h4>
            </div>
            <div class="panel-body">
                <div class="form-inline">
                    <input type="text" class="form-control input-sm" placeholder="시작날짜"> ~
                    <input type="text" class="form-control input-sm" placeholder="종료날짜">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-primary-outline btn-sm">
                            <input type="checkbox" name="example7">
                            미수납
                        </label>
                        <label class="btn btn-primary-outline btn-sm">
                            <input type="checkbox" name="example7">
                            전부
                        </label>
                        <label class="btn btn-primary-outline btn-sm">
                            <input type="checkbox" name="example7">
                            외래
                        </label>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="row">
        <section class="panel">
            <div class="panel-heading">
                <h4 class="color-primary">수행기록</h4>
            </div>
            <div class="panel-body">
                <h5 class="color-info">오더</h5>
            </div>
            <div class="panel-footer">
                <table class="table thead-default table-condensed">
                    <thead>
                        <tr>
                            <th>일시</th>
                            <th>코드</th>
                            <th>명칭</th>
                            <th>총량</th>
                            <th>회수</th>
                            <th>일수</th>
                            <th>중량</th>
                            <th>비급여</th>
                            <th>원외</th>
                            <th>예외코드</th>
                            <th>용법</th>
                            <th>예약</th>
                            <th>수납</th>
                            <th>연결</th>
                            <th>치료시간</th>
                        </tr>
                    </thead>
                    <tr ng-repeat="a in as">
                        <td>@{{a}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </section>
    </div>
    <div class="row">
        <button type="button" class="btn btn-primary col-xl-12 font-size-20"><strong>작성완료</strong></button>
    </div>

</div>
