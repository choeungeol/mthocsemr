<div class="page-content-inner">
    <div class="row">
        <section class="panel">
            <div class="panel-body">
                <div class="margin-bottom-10">
                    <table class="table table-condensed table-hover nowrap" id="example1" width="100%">
                        <thead>
                        <tr>
                            <th>등록번호</th>
                            <th>수진자명</th>
                            <th>생년월일</th>
                            <th>나이(만)</th>
                            <th>성별</th>
                            <th>혈액형</th>
                            <th>메모</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Jennie</td>
                            <td>755 Greyson Key</td>
                            <td>East Jazmyne</td>
                            <td>94</td>
                            <td>2016/03/29</td>
                            <td>$530,408</td>
                            <td>$530,408</td>
                        </tr>
                        <tr>
                            <td>Emerson</td>
                            <td>784 Adriel Radial</td>
                            <td>New Jerroldland</td>
                            <td>4</td>
                            <td>2014/02/26</td>
                            <td>$805,823</td>
                            <td>$805,823</td>
                        </tr>
                        <tr>
                            <td>Herta</td>
                            <td>7491 Bednar Gardens</td>
                            <td>Port Lucianoton</td>
                            <td>23</td>
                            <td>2013/10/12</td>
                            <td>$352,269</td>
                            <td>$352,269</td>
                        </tr>
                        <tr>
                            <td>Stone_Deckow</td>
                            <td>6440 Moen Loop</td>
                            <td>Jenningsbury</td>
                            <td>23</td>
                            <td>2014/07/28</td>
                            <td>$219,573</td>
                            <td>$219,573</td>
                        </tr>
                        <tr>
                            <td>Davin</td>
                            <td>50922 Kiara Square</td>
                            <td>Port Edmund</td>
                            <td>37</td>
                            <td>2014/11/27</td>
                            <td>$241,432</td>
                            <td>$241,432</td>
                        </tr>
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
                            <td><input type="text" class="form-control input-sm" readonly></td>
                            <th>수진자명</th>
                            <td><input type="text" class="form-control input-sm" readonly></td>
                            <th>생년월일</th>
                            <td><input type="text" class="form-control input-sm" readonly></td>
                            <th>성별</th>
                            <td><input type="text" class="form-control input-sm" readonly></td>
                            <th>혈액형</th>
                            <td><input type="text" class="form-control input-sm" readonly></td>
                        </tr>
                        <tr>
                            <th>메모</th>
                            <td colspan="9"><textarea class="form-control input-sm" rows="1"></textarea></td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <div class="row">
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
                                    <input type="text" class="form-control input-sm" placeholder="mmHg" required>
                                </div>
                            </td>
                            <td> <div class="input-group">
                                    <span class="input-group-addon">최고혈압</span>
                                    <input type="text" class="form-control input-sm" placeholder="mmHg" required>
                                </div>
                            </td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">맥박</span>
                                    <input type="text" class="form-control input-sm" placeholder="bpm" required>
                                </div>
                            </td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">체중</span>
                                    <input type="text" class="form-control input-sm" placeholder="kg" required>
                                </div>
                            </td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon btn-default">체온</span>
                                    <input type="text" class="form-control input-sm" placeholder="℃" required>
                                </div>
                            </td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">호흡수</span>
                                    <input type="text" class="form-control input-sm" placeholder="분당" required>
                                </div>
                            </td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">키</span>
                                    <input type="text" class="form-control input-sm" placeholder="Cm" required>
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
    </div>
    <div class="row">
        <button type="button" class="btn btn-primary col-xl-12 font-size-20"><strong>작성완료</strong></button>
    </div>
</div>
<script>
    $(function(){

        $('#example1').DataTable({
            responsive: true
        });
    })
</script>