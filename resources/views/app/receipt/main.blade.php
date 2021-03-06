@extends('app.receipt.layout.structure')

<!-- 컨텐츠 -->
@section('content')
    <section class="page-content" ng-app="receipt">
        <div class="page-content-inner" ng-controller="receiptCtrl">
            <div class="row">
                <section class="panel">
                    <div class="panel-body">
                        <div class="margin-bottom-10">
                            <table class="table table-condensed table-border" style="font-size:12px;">
                                <thead>
                                <tr>
                                    <th>이름</th>
                                    <th>생년월일</th>
                                    <th>성별</th>
                                    <th>혈액형</th>
                                    <th>예약일시</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($patients as $p)
                                    <tr>
                                        <td>{{ $p->name }}</td>
                                        <td>{{ $p->birthday }}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            <form role="form" method="POST" action="receipt/store">
                {{ csrf_field() }}
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
                                            <table class="table table-hover" on-right-click="ShowContextMenu()">
                                                <tbody>
                                                <tr context="context1">
                                                    <td><input type="text" class="form-control input-sm" placeholder="수진자명" name="name" required></td>
                                                    <td><input type="text" class="form-control input-sm" placeholder="전화번호" name="phone" required></td>
                                                    <td><input type="text" class="form-control input-sm" placeholder="혈액형" ></td>
                                                    <td><input type="text" class="form-control input-sm" placeholder="주민등록번호" name="id_num" required></td>
                                                    <td><input type="text" class="form-control input-sm" placeholder="내원사유" name="vhreason" required></td>
                                                    <td><input type="text" class="form-control input-sm" placeholder="이메일" name="email" required></td>
                                                </tr>
                                                <tr context="context2">
                                                    <td><input type="text" class="form-control input-sm" placeholder="휴대전화" name="cellphone" required></td>
                                                    <td><input type="text" class="form-control input-sm" placeholder="생년월일" name="birthday" required></td>
                                                    <td><input type="text" class="form-control input-sm" placeholder="미수금"></td>
                                                    <td><input type="text" class="form-control input-sm" placeholder="나이"></td>
                                                    <td><input type="text" class="form-control input-sm" placeholder="사업자등록번호" name="buss_num" required></td>
                                                    <td><input type="text" class="form-control input-sm" placeholder="사업장명칭" name="buss_nam" required></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" class="form-control input-sm" placeholder="우편번호" name="postal_code" required></td>
                                                    <td><input type="text" class="form-control input-sm" placeholder="주소" name="addr" required></td>
                                                    <td><input type="text" class="form-control input-sm" placeholder="상세주소" name="addr_detail" required></td>
                                                    <td>
                                                        <select name="dis_id" class="form-control input-sm" required>
                                                            @foreach($dis as $d)
                                                                <option value="{{ $d->id }}">{{ $d->id }}.{{ $d->code_name }}</option>
                                                            @endforeach
                                                            <option></option>
                                                        </select>
                                                    </td>
                                                    <td><input type="text" class="form-control input-sm" style="display:none;"></td>
                                                    <td><input type="text" class="form-control input-sm" style="display:none;"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6"><textarea class="form-control" rows="2" name="memo" required></textarea></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div class="btn-group pull-right" data-toggle="buttons">
                                                <label class="btn btn-info-outline btn-sm">
                                                    <input type="checkbox" name="info_agg">
                                                    정보동의여부
                                                </label>
                                                <label class="btn btn-info-outline btn-sm">
                                                    <input type="checkbox" name="fregi">
                                                    가족등록여부
                                                </label>
                                                <label class="btn btn-info-outline btn-sm">
                                                    <input type="checkbox" name="ereception">
                                                    응급여부
                                                </label>
                                                <label class="btn btn-info-outline btn-sm">
                                                    <input type="checkbox" name="married">
                                                    기혼
                                                </label>
                                                <label class="btn btn-info-outline btn-sm">
                                                    <input type="checkbox" name="pregnant">
                                                    임신여부
                                                </label>
                                                <label class="btn btn-info-outline btn-sm">
                                                    <input type="checkbox" name="foreigner">
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
                                            <td><input type="text" class="form-control input-sm" placeholder="사업장기호" required></td>
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
                                            <td>
                                                <select name="vet_id" class="form-control input-sm" required>
                                                    @foreach($vet as $v)
                                                        <option value="{{ $v->id }}">{{ $v->id }}.{{ $v->code_name }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td><input type="text" class="form-control input-sm" placeholder="보훈번호" name="vet_num"required></td>
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
                                            <input type="radio" name="hcselect" value="A" required>
                                            진료실A
                                        </label>
                                        <label class="btn btn-primary-outline btn-sm" value="B" required>
                                            <input type="radio" name="hcselect">
                                            진료실B
                                        </label>
                                        <label class="btn btn-primary-outline btn-sm" value="C" required>
                                            <input type="radio" name="hcselect">
                                            진료실C
                                        </label>
                                    </div>

                                    <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-secondary-outline btn-sm">
                                            <input type="radio" name="hcselect" value="OA" required>
                                            한방진료실A
                                        </label>
                                        <label class="btn btn-secondary-outline btn-sm" value="OB" required>
                                            <input type="radio" name="hcselect">
                                            한방진료실B
                                        </label>
                                        <label class="btn btn-secondary-outline btn-sm" value="OC" required>
                                            <input type="radio" name="hcselect">
                                            한방진료실C
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <button type="submit" class="btn btn-primary col-xl-12 font-size-20"><strong>작성완료</strong></button>
            </div>
            </form>
        </div>
        <ul id="context1" class="dropdown-menu">
            <li><a ng-click="edit()">Edit</a></li>
            <li><a ng-click="link()">Link</a></li>
            <li><a ng-click="delete()">Delete</a></li>
            <li><hr></li>
            <li><a ng-click="properties()">Properties</a></li>
        </ul>
        <ul id="context2" class="dropdown-menu">
            <li><a ng-click="edit()">Edit</a></li>
            <li class="divider"></li>
            <li><a ng-click="properties()">Properties</a></li>
        </ul>
    </section>

@endsection
