<div class="page-content-inner">
    <div class="row">
        <section class="panel">
            <div class="panel-body">
                <div class="margin-bottom-10">
                    <table class="table table-hover nowrap" id="example1" width="100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Date</th>
                            <th>Salary</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat="r in repeat">
                            <td>@{{r.name}}</td>
                            <td>@{{r.some}}</td>
                            <td>East Jazmyne</td>
                            <td>94</td>
                            <td>2016/03/29</td>
                            <td>$530,408</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <div class="row">
        <div class="margin-bottom-10">
            <div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading collapsed" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <div class="panel-title">
                                            <span class="accordion-indicator pull-right">
                                                <i class="plus fa fa-plus"></i>
                                                <i class="minus fa fa-minus"></i>
                                            </span>
                            <a>
                                <h4 class="color-primary">신규접수</h4>
                            </a>
                        </div>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tbody>
                                        <tr>
                                            <td><input type="text" class="form-control input-sm" placeholder="수진자명"></td>
                                            <td><input type="text" class="form-control input-sm" placeholder="전화번호"></td>
                                            <td><input type="text" class="form-control input-sm" placeholder="혈액형"></td>
                                            <td><input type="text" class="form-control input-sm" placeholder="주민등록번호"></td>
                                            <td><input type="text" class="form-control input-sm" placeholder="내원사유"></td>
                                            <td><input type="text" class="form-control input-sm" placeholder="이메일"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" class="form-control input-sm" placeholder="휴대전화"></td>
                                            <td><input type="text" class="form-control input-sm" placeholder="생년월일"></td>
                                            <td><input type="text" class="form-control input-sm" placeholder="미수금"></td>
                                            <td><input type="text" class="form-control input-sm" placeholder="나이"></td>
                                            <td><input type="text" class="form-control input-sm" placeholder="사업자등록번호"></td>
                                            <td><input type="text" class="form-control input-sm" placeholder="사업장명칭"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" class="form-control input-sm" placeholder="우편번호"></td>
                                            <td><input type="text" class="form-control input-sm" placeholder="주소"></td>
                                            <td><input type="text" class="form-control input-sm" placeholder="상세주소"></td>
                                            <td><input type="text" class="form-control input-sm" placeholder="장애분류키"></td>
                                            <td><input type="text" class="form-control input-sm" style="display:none;"></td>
                                            <td><input type="text" class="form-control input-sm" style="display:none;"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6"><textarea class="form-control" rows="2"></textarea></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="btn-group pull-right" data-toggle="buttons">
                                        <label class="btn btn-info-outline btn-sm">
                                            <input type="checkbox" name="example1">
                                            장애분류여부
                                        </label>
                                        <label class="btn btn-info-outline btn-sm">
                                            <input type="checkbox" name="example2">
                                            가족등록여부
                                        </label>
                                        <label class="btn btn-info-outline btn-sm">
                                            <input type="checkbox" name="example3">
                                            응급여부
                                        </label>
                                        <label class="btn btn-info-outline btn-sm">
                                            <input type="checkbox" name="example4">
                                            기혼
                                        </label>
                                        <label class="btn btn-info-outline btn-sm">
                                            <input type="checkbox" name="example5">
                                            임신여부
                                        </label>
                                        <label class="btn btn-info-outline btn-sm">
                                            <input type="checkbox" name="example6">
                                            외국인
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading collapsed" role="tab" id="headingTwo" class="collapsed" data-toggle="collapse" data-parent="#accordion" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="panel-title">
                                            <span class="accordion-indicator pull-right">
                                                <i class="plus fa fa-plus"></i>
                                                <i class="minus fa fa-minus"></i>
                                            </span>
                            <a><h4 class="color-primary">보험여부</h4></a>
                        </div>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <table class="table table-condensed">
                                <tr>
                                    <td><input type="text" class="form-control input-sm" placeholder="보험종류"></td>
                                    <td><select class="form-control input-sm" placeholder="사업자 명칭">
                                            <option></option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="form-control input-sm" placeholder="예외구분"></td>
                                    <td><input type="text" class="form-control input-sm" ng-model="cname" placeholder="사업장기호"></td>
                                    <td><input type="text" class="form-control input-sm" placeholder="취득일자"></td>
                                    <td><select class="form-control input-sm" data-placeholder="자격구분">
                                            <option></option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control input-sm" placeholder="증번호"></td>
                                    <td><input type="text" class="form-control input-sm" placeholder="유효기간"></td>
                                    <td><input type="text" class="form-control input-sm" placeholder="비고"></td>
                                    <td><input type="text" class="form-control input-sm" placeholder="피보험자 성명"></td>
                                    <td><input type="text" class="form-control input-sm" placeholder="보훈구분키"></td>
                                    <td><input type="text" class="form-control input-sm" placeholder="보훈구분키"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading collapsed" role="tab" id="headingThree" class="collapsed" data-toggle="collapse" data-parent="#accordion" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <div class="panel-title">
                                            <span class="accordion-indicator pull-right">
                                                <i class="plus fa fa-plus"></i>
                                                <i class="minus fa fa-minus"></i>
                                            </span>
                            <a>
                                <h4 class="color-primary">진료/지원실 배정</h4>
                            </a>
                        </div>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <div class="btn-group margin-right-20" data-toggle="buttons">
                                <label class="btn btn-primary-outline btn-sm">
                                    <input type="radio" name="example5">
                                    진료실A
                                </label>
                                <label class="btn btn-primary-outline btn-sm">
                                    <input type="radio" name="example5">
                                    진료실B
                                </label>
                                <label class="btn btn-primary-outline btn-sm">
                                    <input type="radio" name="example5">
                                    진료실C
                                </label>
                            </div>

                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-secondary-outline btn-sm">
                                    <input type="radio" name="example5">
                                    한방진료실A
                                </label>
                                <label class="btn btn-secondary-outline btn-sm">
                                    <input type="radio" name="example5">
                                    한방진료실B
                                </label>
                                <label class="btn btn-secondary-outline btn-sm">
                                    <input type="radio" name="example5">
                                    한방진료실C
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="row">
        <button type="button" class="btn btn-primary col-xl-12 font-size-20"><strong>작성완료</strong></button>
    </div>
</div>

<!-- Page Scripts -->
<script>
    $(function(){

        $('#example1').DataTable({
            responsive: true
        });
    })
</script>
<!-- End Page Scripts -->