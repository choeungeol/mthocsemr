@extends('app.receipt.layout.structure')

<!-- 컨텐츠 -->
@section('content')
    <section class="page-content" ng-app="basicBiopsy">
        <div class="page-content-inner" ng-controller="basicBiopsyCtrl">
            <div class="row">
                <section class="panel">
                    <div class="panel-body">
                        <div class="margin-bottom-10">
                            <table class="table table-condensed table-hover nowrap" id="example1" width="100%">
                                <thead>
                                <tr>
                                    <th>차트번호</th>
                                    <th>수진자명</th>
                                    <th>생년월일</th>
                                    <th>나이(만)</th>
                                    <th>성별</th>
                                    <th>혈액형</th>
                                    <th>메모</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($noflag as $nf)
                                    <tr ng-click="getInfo()">
                                        <td id="id">{{ $nf->id }}</td>
                                        <td id="name">{{ $nf->name }}</td>
                                        <td id="birthday">{{ $nf->birthday }}</td>
                                        <td id="age"></td>
                                        <td id="gender"></td>
                                        <td id="blood"></td>
                                        <td id="memo">{{ $nf->memo }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            <div class="row">
                <section class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4 class="color-primary">수진자 정보</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <tr>
                                    <th>차트번호</th>
                                    <td><input type="text" class="form-control input-sm" readonly ng-model="cno"></td>
                                    <th>수진자명</th>
                                    <td><input type="text" class="form-control input-sm" readonly ng-model="pname"></td>
                                    <th>생년월일</th>
                                    <td><input type="text" class="form-control input-sm" readonly ng-model="birthday"></td>
                                    <th>성별</th>
                                    <td><input type="text" class="form-control input-sm" readonly ng-model="age"></td>
                                    <th>혈액형</th>
                                    <td><input type="text" class="form-control input-sm" readonly ng-model="blood"></td>
                                </tr>
                                <tr>
                                    <th>메모</th>
                                    <td colspan="9"><textarea class="form-control input-sm" rows="1" readonly ng-model="memo"></textarea></td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </section>
            </div>
            <form role="form" method="POST" action="basicbiopsy/store" class="row">
                {{ csrf_field() }}
                <input type="text" ng-model="cno" name="chart_id" style="display:none;">
                <section class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4 class="color-primary">기초 검사</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <tr>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-addon">최저혈압</span>
                                            <input type="text" class="form-control input-sm" placeholder="mmHg" required name="minbp">
                                        </div>
                                    </td>
                                    <td> <div class="input-group">
                                            <span class="input-group-addon">최고혈압</span>
                                            <input type="text" class="form-control input-sm" placeholder="mmHg" required name="maxbp">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-addon">맥박</span>
                                            <input type="text" class="form-control input-sm" placeholder="bpm" required name="pb">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-addon">체중</span>
                                            <input type="text" class="form-control input-sm" placeholder="kg" required name="weight">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-addon btn-default">체온</span>
                                            <input type="text" class="form-control input-sm" placeholder="℃" required name="temp">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-addon">호흡수</span>
                                            <input type="text" class="form-control input-sm" placeholder="분당" required  name="brate">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-addon">키</span>
                                            <input type="text" class="form-control input-sm" placeholder="Cm" required  name="height">
                                        </div>
                                    </td>
                                    <td class="width-150">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-secondary disabled btn-sm">
                                                <input type="radio">
                                                당뇨
                                            </label>
                                            <label class="btn btn-secondary-outline btn-sm">
                                                <input type="radio" name="diabetes">
                                                유
                                            </label>
                                            <label class="btn btn-secondary-outline btn-sm">
                                                <input type="radio" name="diabetes">
                                                무
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <button type="submit" class="btn btn-primary col-xl-12 font-size-20"><strong>작성완료</strong></button>
                </div>
            </form>

        </div>

    </section>
    <!-- Page Scripts -->

    <!-- End Page Scripts -->
@endsection
