<div class="page-content-inner">
    <section class="panel panel-with-borders">
        <div class="panel-heading">
            <h4>코드그룹생성</h4>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <form name="form1" ng-submit="saveCodeGroup()" novalidate>
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="form-control-label" for="group_id">
                                        코드그룹 ID
                                    </label>
                                </div>
                                <div class="col-md-3"
                                     ng-class="{ 'has-danger': form1.group_id.$invalid && (form1.$submitted || form1.group_id.$dirty) }">
                                    <input type="text"
                                           class="form-control text-uppercase input-sm"
                                           placeholder="코드그룹ID"
                                           id="group_id"
                                           name="group_id"
                                           ng-model="newCodeGroup.group_id"
                                           ng-maxlength="10"
                                           ng-pattern=""
                                           required/>
                                    <div class="form-control-error-list"
                                         ng-show="form1.group_id.$error && (form1.$submitted || form1.group_id.$dirty)">
                                        <ul>
                                            <li ng-show="form1.group_id.$error.required">코드그룹ID는 필수값입니다</li>
                                            <li ng-show="form1.group_id.$error.maxlength">길이는 10자리 이하여야 합니다</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label class="form-control-label" for="group_name">코드그룹명</label>
                                </div>
                                <div class="col-md-6"
                                     ng-class="{ 'has-danger': form1.group_name.$invalid && (form1.$submitted || form1.group_name.$dirty) }">
                                    <input type="text"
                                           class="form-control input-sm"
                                           placeholder="코드그룹명"
                                           id="group_name"
                                           name="group_name"
                                           ng-model="newCodeGroup.group_name"
                                           ng-maxlength="20"
                                           required/>
                                    <div class="form-control-error-list"
                                         ng-show="form1.group_name.$error && (form1.$submitted || form1.group_name.$dirty)">
                                        <ul>
                                            <li ng-show="form1.group_name.$error.required">코드그룹명은 필수값입니다</li>
                                            <li ng-show="form1.group_name.$error.maxlength">길이는 10자리 이하여야 합니다</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive margin-bottom-10">
                                        <div class="page-content-inner">
                                            <section class="panel panel-with-borders">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <h5>코드리스트</h5>
                                                            <div class="btn-group margin-inline" aria-label=""
                                                                 role="group">
                                                                <button type="button" class="btn btn-xs btn-primary"
                                                                        ng-click="newCode.addRow()">
                                                                    <i class="icmn-plus3" aria-hidden="true"></i>
                                                                    추가
                                                                </button>
                                                                <button type="button" class="btn btn-xs btn-success"
                                                                        ng-click="newCode.selAllRow()">
                                                                    <i class="icmn-stack-check" aria-hidden="true"></i>
                                                                    선택
                                                                </button>
                                                                <button type="button" class="btn btn-xs btn-warning"
                                                                        ng-click="newCode.selNoRow()">
                                                                    <i class="icmn-stack-cancel" aria-hidden="true"></i>
                                                                    해제
                                                                </button>
                                                                <button type="button" class="btn btn-xs btn-danger"
                                                                        ng-click="newCode.deleteRow()">
                                                                    <i class="icmn-minus3" aria-hidden="true"></i>
                                                                    삭제
                                                                </button>
                                                            </div>
                                                            <div class="table-responsive margin-bottom-10">
                                                                <table class="table table-hover table-condensed">
                                                                    <thead class="thead-default">
                                                                    <tr>
                                                                        <th class="text-center">체크</th>
                                                                        <th class="text-center">코드 ID</th>
                                                                        <th class="text-center">코드 명</th>
                                                                        <th class="text-center">메세지</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody ng-repeat="code in newCode.newCodes" ng-form="form2">
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <input type="checkbox"
                                                                                   class="input-sm"
                                                                                   name="chk"
                                                                                   ng-model="code.chk">
                                                                        </td>
                                                                        <td>
                                                                            <input type="text"
                                                                                   class="form-control input-sm text-uppercase"
                                                                                   name="code_id"
                                                                                   ng-model="code.code_id"
                                                                                   required>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text"
                                                                                   class="form-control input-sm"
                                                                                   name="code_name"
                                                                                   ng-model="code.code_name"
                                                                                   required>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-control-error-list input-sm"
                                                                                 ng-show="form2.code_id.$error && (form1.$submitted || form2.code_id.$dirty)">
                                                                                <ul>
                                                                                    <li ng-show="form2.code_id.$error.required">
                                                                                        코드 ID는 필수값입니다
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="form-control-error-list input-sm"
                                                                                 ng-show="form2.code_name.$error && (form1.$submitted || form2.code_name.$dirty)">
                                                                                <ul>
                                                                                    <li ng-show="form2.code_name.$error.required">
                                                                                        코드 명은 필수값입니다
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-danger" role="alert"
                                 ng-show="( form1.$invalid || form2.$invalid ) && form1.$submitted && form1.$dirty">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <p><strong>체크열에 에러로 표시된 항목에 대해서 다음을 확인해 주시기 바랍니다.</strong></p>
                                <ul class="margin-top-10">
                                    <li>코드와 코드명은 필수값 입니다</li>
                                    <li>코드는 유일한 값을 가져야 합니다</li>
                                    <li>코드는 최대 20자리, 코드명은 최대 60자리까지 허용합니다</li>
                                </ul>
                            </div>
                            <div class="form-actions">
                                <button type="submit"
                                        ladda="laddaControl"
                                        data-style="expand-left"
                                        ng-disabled="form1.$invalid || form2.$invalid || !form1.$dirty"
                                        class="btn btn-sm btn-primary width-100">
                                    저장
                                </button>
                                <button type="button" class="btn btn-sm btn-default" ui-sref="intro">취소</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
