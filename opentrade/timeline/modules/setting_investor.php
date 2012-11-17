<!-- timeline section -->
<div class="main-wrap pull-left">
	<!-- timeline > title -->
	<div class="title">
		<!--a href="#" class="btn pull-right"><i class="icon icon-plus"></i>관심추가</a-->
		<div class="title-profile pull-left"><img src="http://profile.ak.fbcdn.net/hprofile-ak-snc4/368821_100000888744543_761385340_n.jpg"></div>
		<div class="inner-wrap">
			<h1>권혁태</h1>
			<p>쿨리지코너인베스트먼트 대표이사</p>
			<p><b>엔젤투자자</b> : ANGEL000001</p>
		</div>
	</div>

	<div class="setting">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#account" data-toggle="tab">계정</a></li>
			<li><a href="#portpolio" data-toggle="tab">포트폴리오</a></li>
			<li><a href="#favorite" data-toggle="tab">관심기업</a></li>
			<li><a href="#investment" data-toggle="tab">투자요청</a></li>
			<li><a href="#category" data-toggle="tab">카테고리 관리</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="account">
				<form class="form-horizontal">
					<h3>계정</h3>
					<div class="control-group">
						<label class="control-label" for="username">이름</label>
						<div class="controls">
							<input type="text" id="username" placeholder="이름">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="profile">프로필 이미지</label>
						<div class="controls profile-upload clearfix">
							<a href="#" class="profile pull-left"><img src="http://profile.ak.fbcdn.net/hprofile-ak-snc4/368821_100000888744543_761385340_n.jpg"></a>
							<a href="#" id="profile" class="btn">이미지 업로드</a>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="introduce">소개문구</label>
						<div class="controls">
							<textarea id="introduce" placeholder="소개문구" style="width: 440px;"></textarea>
						</div>
					</div>
					<hr/>
					<div class="control-group">
						<label class="control-label" for="email">이메일(ID)</label>
						<div class="controls">
							<input type="text" value="hongcoffee@gmail.com" readonly>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="password">비밀번호</label>
						<div class="controls">
							<input type="password" id="password" placeholder="비밀번호">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="password-confirm">비밀번호 확인</label>
						<div class="controls">
							<input type="password" id="password-confirm" placeholder="비밀번호 확인">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="password-hint">비밀번호 힌트</label>
						<div class="controls">
							<input type="text" id="password-hint" placeholder="비밀번호 힌트">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="mailing">이메일 수신</label>
						<div class="controls">
							<label class="radio inline"><input type="radio" name="mailing" value="" checked> 메일을 받습니다.</label>
							<label class="radio inline"><input type="radio" name="mailing" value=""> 메일을 받지 않습니다.</label>
						</div>
					</div>
					<hr/>
					<div class="control-group">
						<label class="control-label" for="address">주소</label>
						<div class="controls">
							<input type="text" id="address" placeholder="주소" style="width: 440px;">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="tel">전화번호</label>
						<div class="controls">
							<input type="text" id="tel" placeholder="전화번호">
						</div>
					</div>
					<hr/>
					<div class="btn-wrap">
						<input type="button" class="btn btn-large btn-primary" value="완료">
						<input type="button" class="btn btn-large" value="취소">
					</div>
				</form>
			</div>
			<div class="tab-pane" id="portpolio">
				<form class="form-horizontal">
					<a href="" class="btn pull-right">신규추가</a>
					<h3>포트폴리오 관리</h3>
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>기업번호</th>
								<th>기업이름</th>
								<th>기업상태</th>
								<th>마일스톤</th>
								<th>투자금</th>
								<th>보유주식</th>
								<th>매출</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>PRE00001</td>
								<td>BCNX</td>
								<td><span>Active</span></td>
								<td>2단계 : 법인설립</td>
								<td>10,000만원</td>
								<td>3,000주</td>
								<td>6,000만원</td>
							</tr>
						</tbody>
					</table>
					<div class="pagination">
						<ul>
							<li class="disabled"><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li class="active"><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</form>
			</div>
			<div class="tab-pane" id="favorite">
				<form class="form-horizontal">
					<select class="pull-right">
						<option>전체 카테고리</option>
						<option>카테고리 1</option>
						<option>카테고리 2</option>
						<option>카테고리 없음</option>
					</select>
					<h3>관심기업 관리</h3>
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th><input type="checkbox" class="checkbox"></th>
								<th>기업번호</th>
								<th>기업이름</th>
								<th>카테고리</th>
								<th>마일스톤</th>
								<th>매출</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th><input type="checkbox" class="checkbox"></th>
								<td>PRE00001</td>
								<td>BCNX</td>
								<td>
									<select style="width:130px;">
										<option>카테고리 1</option>
										<option>카테고리 2</option>
										<option>카테고리 없음</option>
									</select>
								</td>
								<td>2단계 : 법인설립</td>
								<td>6,000만원</td>
							</tr>
							<tr>
								<th><input type="checkbox" class="checkbox"></th>
								<td>PRE00001</td>
								<td>엑스피<i class="icon icon-warning-s"></i></td>
								<td>
									<select style="width:130px;">
										<option>카테고리 1</option>
										<option>카테고리 2</option>
										<option>카테고리 없음</option>
									</select>
								</td>
								<td>2단계 : 법인설립</td>
								<td>6,000만원</td>
							</tr>
						</tbody>
					</table>
					<a href="" class="btn">삭제</a>
					<div class="pagination">
						<ul>
							<li class="disabled"><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li class="active"><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</form>
			</div>
			<div class="tab-pane" id="investment">
				<form class="form-horizontal">
					<h3>투자 요청 목록</h3>
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>기업번호</th>
								<th>기업이름</th>
								<th>메시지</th>
								<th>요청일</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>PRE00001</td>
								<td>BCNX</td>
								<td><a href="">열심히 살겠습니다. 투자 좀 해주세요~ !</a></td>
								<td>2012.8.23</td>
							</tr>
						</tbody>
					</table>
					<div class="pagination">
						<ul>
							<li class="disabled"><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li class="active"><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</form>
			</div>
			<div class="tab-pane" id="category">
				<form class="form-horizontal">
					<a href="#" class="btn pull-right">신규추가</a>
					<h3>포트폴리오 관리</h3>
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>카테고리명</th>
								<th width="100px">포함된 기업수</th>
								<th width="70px">순서</th>
								<th width="50px">삭제</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>창업경진대회</td>
								<td>3개</td>
								<td>
									<div class="btn-toolbar">
										<div class="btn-group">
											<a href="" class="btn btn-small"><i class="icon icon-arrow-up"></i></a>
											<a href="" class="btn btn-small"><i class="icon icon-arrow-down"></i></a>
										</div>
									</div>
								</td>
								<td><a href="" class="btn btn-danger btn-small">삭제</a></td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td><b>카테고리 없음</b></td>
								<td><b>2개</b></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td><b>전체</b></td>
								<td><b>5개</b></td>
								<td></td>
								<td></td>
							</tr>
						</tfoot>
					</table>
					<br>
					<hr>
					<br>
					<a href="#" class="btn pull-right">신규추가</a>
					<h3>관심기업 관리</h3>
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>카테고리명</th>
								<th width="100px">포함된 기업수</th>
								<th width="70px">순서</th>
								<th width="50px">삭제</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>창업경진대회</td>
								<td>3개</td>
								<td>
									<div class="btn-toolbar">
										<div class="btn-group">
											<a href="" class="btn btn-small"><i class="icon icon-arrow-up"></i></a>
											<a href="" class="btn btn-small"><i class="icon icon-arrow-down"></i></a>
										</div>
									</div>
								</td>
								<td><a href="" class="btn btn-danger btn-small">삭제</a></td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td><b>카테고리 없음</b></td>
								<td><b>2개</b></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td><b>전체</b></td>
								<td><b>5개</b></td>
								<td></td>
								<td></td>
							</tr>
						</tfoot>
					</table>
				</form>
				<!-- 프리미엄 안내 영역 -->
				<div class="premium">
					<h3>카테고리 설정은 프리미엄 서비스에서만 제공 됩니다.</h3>
					<p>
						오픈트레이드 프리미엄 서비스를 통해 더욱더<br>
						효율적으로 포토폴리오와 관심 기업들을 관리하실 수 있습니다. <br><br>
						<strong>프리미엄 서비스를 신청하시려면, 아래로 문의 주세요.</strong><br>
						02-2183-2240 / 오픈트레이드
					</p>
				</div>
			</div>
		</div>
	</div>
</div>