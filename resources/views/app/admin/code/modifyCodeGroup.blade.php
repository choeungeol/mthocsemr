<div class="page-content-inner">
    <section class="panel">
        <div class="panel-heading">
            <h3>코드그룹/코드 변경</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="margin-bottom-50">
                        <br />
                        <!-- Horizontal Form -->
                        <form>
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="group_id">코드그룹 ID</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" placeholder="코드그룹ID" id="group_id">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="group_name">코드그룹명</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="코드그룹명" id="group_name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive margin-bottom-50">
                                        <table class="table table-hover nowrap editable-table" id="codes">
                                            <thead>
                                            <tr>
                                                <th>코드</th>
                                                <th>코드명</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Damon</td>
                                                <td>5516 Adolfo Green</td>
                                            </tr>
                                            <tr>
                                                <td>Torrey</td>
                                                <td>1995 Richie Neck</td>
                                            </tr>
                                            <tr>
                                                <td>Miracle</td>
                                                <td>176 Hirthe Squares</td>
                                            </tr>
                                            <tr>
                                                <td>Wilhelmine</td>
                                                <td>44727 O&#x27;Hara Union</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="button" class="btn btn-primary width-150">저장</button>
                                <button type="button" class="btn btn-default" ui-sref="intro">취소</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Page Scripts -->
<script>
    $(function(){

        $('#codes').editableTableWidget();

    })
</script>
<!-- End Page Scripts -->