<style>
ul.group-list {margin:-20px 0px 0px 0px; padding:10px;}
ul.group-list li {list-style:none; list-style-type:disc; margin:0px 13px 5px 0px;display:inline-block; cursor:pointer;line-height:10px;}
div.group-info-wrap {overflow:auto; height:450px; position:relative;}
ol.group-info {margin:0px 5px 0px 5px; position:absolute;}
ol.group-info li {border:1px solid #ddd;margin:10px 0 0 0;padding:10px;font-weight:bold;}
ol.group-info li ul.detail {margin:5px 0px 0px 10px;padding:0;list-style:none;}
ol.group-info li ul.detail li {margin:0px; padding:0px; border:none; font-weight:normal;list-style: none;}
</style>


<div class="table-title gd-help-manual">
	전자상거래 등에서의 상품 정보 제공 고시
</div>

<table class="table table-cols">
	<colgroup>
		<col class="width-md">
		<col>
	</colgroup>
	<tbody>
	<tr>
		<th>상품품목</th><td>
			<select id="groupList" class="group-list" onchange="view_must_info()">
				<option>==상품품목==</option>
				<option>● 의류</option>
				<option>● 구두/신발</option>
				<option>● 가방</option>
				<option>● 패션잡화 (모자 / 벨트 / 액세서리)</option>
				<option>● 침구류/커튼</option>
				<option>● 가구(침대 / 소파 / 싱크대 / DIY제품)</option>
				<option>● 영상가전(TV류)</option>
				<option>● 가정용 전기제품 (냉장고 / 세탁기 / 식기세척기 / 전자레인지)</option>
				<option>● 계절가전(에어컨/온풍기)</option>
				<option>● 사무용기기(컴퓨터 / 노트북 / 프린터)</option>
				<option>● 광학기기(디지털카메라/캠코더)</option>
				<option>● 소형전자(MP3/전자사전 등)</option>
				<option>● 휴대폰</option>
				<option>● 네비게이션</option>
				<option>● 자동차용품 (자동차부품 / 기타 자동차용품)</option>
				<option>● 의료기기</option>
				<option>● 주방용품</option>
				<option>● 화장품</option>
				<option>● 귀금속/보석/시계류</option>
				<option>● 식품(농수산물)</option>
				<option>● 가공식품</option>
				<option>● 건강기능식품</option>
				<option>● 영유아용품</option>
				<option>● 악기</option>
				<option>● 스포츠용품</option>
				<option>● 서적</option>
				<option>● 호텔/펜션예약</option>
				<option>● 여행패키지</option>
				<option>● 항공권</option>
				<option>● 자동차 대여 서비스 (렌터카)</option>
				<option>● 물품대여서비스(정수기/비데/공기청정기 등)</option>
				<option>● 물품대여서비스(서적/유아용품/행사용품 등)</option>
				<option>● 디지털콘텐츠(음원/게임/인터넷강의 등)</option>
				<option>● 상품권/쿠폰</option>
                <option>● 모바일 쿠폰</option>
                <option>● 영화·공연</option>
                <option>● 기타 용역</option>
				<option>● 기타 재화</option>
			</select>

		</td>
	</tr>
	<tr>
		<td  colspan="2">
			<div class="notice-info">
				상품정보제공 고시에 따라 해당하는 상품품목별 항목에 대한 정보를 입력하시기 바랍니다.
			</div>
			<div class="notice-danger">
				일부 항목의 정보를 모르거나 알수 없는 경우에는 [정보 미제공 사유 및 보완 예정일]을 반드시 기재하여야 합니다.
			</div>
			<div class="notice-info">
				정보 미입력으로 생긴 불이익에 대한 책임소재는 운영 상점에 있습니다.
			</div>

		</td>
	</tr>

	<tr><td colspan="2">

			<div class="group-info-wrap" id="el-group-info-wrap">


				<dl>
					<dt>(1) 의류</dt>
					<dd><ul class="detail">
							<li>1. 제품 소재 (섬유의 조성 또는 혼용률을 백분율로 표시, 기능성인 경우 성적서 또는 허가서)</li>
							<li>2. 색상</li>
							<li>3. 치수</li>
							<li>4. 제조사, 수입품의 경우 수입자를 함께 표기 (병행수입의 경우 병행수입 여부로 대체 가능)</li>
							<li>5. 제조국</li>
							<li>6. 세탁방법 및 취급시 주의사항</li>
							<li>7. 제조연월</li>
							<li>8. 품질보증기준</li>
							<li>9. A/S 책임자와 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(2) 구두 / 신발</dt>
					<dd><ul class="detail">
							<li>1. 제품 소재 (운동화인 경우에는 겉감, 안감을 구분하여 표시)</li>
							<li>2. 색상</li>
							<li>3. 치수</li>
							<li>발길이: 해외사이즈 표기시 국내사이즈 병행 표기(mm)</li>
							<li>굽높이 (굽 재료를 사용하는 여성화에 한함, cm)</li>
							<li>4. 제조사, 수입품의 경우 수입자를 함께 표기 (병행수입의 경우 병행수입 여부로 대체 가능)</li>
							<li>5. 제조국</li>
							<li>6. 취급시 주의사항</li>
							<li>7. 품질보증기준</li>
							<li>8. A/S 책임자와 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(3) 가방</dt>
					<dd><ul class="detail">
							<li>1. 종류</li>
							<li>2. 소재</li>
							<li>3. 색상</li>
							<li>4. 크기</li>
							<li>5. 제조사, 수입품의 경우 수입자를 함께 표기 (병행수입의 경우 병행수입 여부로 대체 가능)</li>
							<li>6. 제조국</li>
							<li>7. 취급시 주의사항</li>
							<li>8. 품질보증기준</li>
							<li>9. A/S 책임자와 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(4) 패션잡화 (모자 / 벨트 / 액세서리)</dt>
					<dd><ul class="detail">
							<li>1. 종류</li>
							<li>2. 소재</li>
							<li>3. 치수</li>
							<li>4. 제조사, 수입품의 경우 수입자를 함께 표기 (병행수입의 경우 병행수입 여부로 대체 가능)</li>
							<li>5. 제조국</li>
							<li>6. 취급시 주의사항</li>
							<li>7. 품질보증기준</li>
							<li>8. A/S 책임자와 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(5) 침구류 / 커튼</dt>
					<dd><ul class="detail">
							<li>1. 제품 소재 (섬유의 조성 또는 혼용률을 백분율로 표시)충전재를 사용한 제품은 충전재를 함께 표기</li>
							<li>2. 색상</li>
							<li>3. 치수</li>
							<li>4. 제품구성</li>
							<li>5. 제조사, 수입품의 경우 수입자를 함께 표기 (병행수입의 경우 병행수입 여부로 대체 가능)</li>
							<li>6. 제조국</li>
							<li>7. 세탁방법 및 취급시 주의사항</li>
							<li>8. 품질보증 기준</li>
							<li>9. A/S 책임자와 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(6) 가구(침대 / 소파 / 싱크대 / DIY제품)</dt>
					<dd><ul class="detail">
							<li>1. 품명</li>
							<li>2. KC 인증 필 유무 (품질경영 및 공산품안전관리법 상 안전 · 품질표시대상공산품에 한함)</li>
							<li>3. 색상</li>
							<li>4. 구성품</li>
							<li>5. 주요 소재</li>
							<li>6. 제조사, 수입품의 경우 수입자를 함께 표기 (병행수입의 경우 병행수입 여부로 대체 가능) <br/>
                                * 구성품 별 제조자가 다른 경우 각 구성품의 제조자, 수입자</li>
							<li>7. 제조국<br/>
                                * 구성품 별 제조국이 다른 경우 각 구성품의 제조국</li>
							<li>8. 크기</li>
							<li>9. 배송 · 설치비용</li>
							<li>10. 품질보증기준</li>
							<li>11. A/S 책임자와 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(7) 영상가전(TV류)</dt>
					<dd><ul class="detail">
							<li>1. 품명 및 모델명</li>
							<li>2. KC 인증 필 유무 (전기용품안전관리법 상 안전인증대상전기용품, 안전확인대상전기용품, 공급자적합성확인대상전기용품에 한함)</li>
							<li>3. 정격전압, 소비전력</li>
                            <li>4. 에너지소비효율등급 (에너지이용합리화법 상 의무대상상품에 한함)</li>
							<li>5. 동일모델의 출시년월</li>
							<li>6. 제조사, 수입품의 경우 수입자를 함께 표기 (병행수입의 경우 병행수입 여부로 대체 가능)</li>
							<li>7. 제조국</li>
							<li>8. 크기 (형태포함)</li>
							<li>9. 화면사양 (크기, 해상도, 화면비율 등)</li>
							<li>10. 품질보증기준</li>
							<li>11. A/S 책임자와 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(8) 가정용 전기제품(냉장고 / 세탁기 / 식기세척기 / 전자레인지)</dt>
					<dd><ul class="detail">
							<li>1. 품명 및 모델명</li>
							<li>2. KC 인증 필 유무 (전기용품안전관리법 상 안전인증대상전기용품, 안전확인대상전기용품, 공급자적합성확인대상전기용품에 한함)</li>
                            <li>3. 정격전압, 소비전력</li>
                            <li>4. 에너지소비효율등급 (에너지이용합리화법 상 의무대상상품에 한함)</li>
							<li>5. 동일모델의 출시년월</li>
							<li>6. 제조사, 수입품의 경우 수입자를 함께 표기 (병행수입의 경우 병행수입 여부로 대체 가능)</li>
							<li>7. 제조국</li>
							<li>8. 크기(용량, 형태 포함)</li>
							<li>9. 품질보증기준</li>
							<li>10. A/S 책임자와 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(9) 계절가전(에어컨 / 온풍기)</dt>
					<dd><ul class="detail">
							<li>1. 품명 및 모델명</li>
							<li>2. KC 인증 필 유무 (전기용품안전관리법 상 안전인증대상전기용품, 안전확인대상전기용품, 공급자적합성확인대상전기용품에 한함)</li>
							<li>3. 정격전압, 소비전력</li>
                            <li>4. 에너지소비효율등급 (에너지이용합리화법 상 의무대상상품에 한함)</li>
							<li>5. 동일모델의 출시년월</li>
							<li>6. 제조사, 수입품의 경우 수입자를 함께 표기 (병행수입의 경우 병행수입 여부로 대체 가능)</li>
							<li>7. 제조국</li>
							<li>8. 크기(형태 및 실외기 포함)</li>
							<li>9. 냉난방면적</li>
							<li>10. 추가설치비용</li>
							<li>11. 품질보증기준</li>
							<li>12. A/S 책임자와 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(10) 사무용기기(컴퓨터 / 노트북 / 프린터)</dt>
					<dd><ul class="detail">
							<li>1. 품명 및 모델명</li>
							<li>2. KC 인증 필 유무 (전파법 상 인증대상상품에 한함, MIC 인증 필 혼용 가능) </li>
							<li>3. 정격전압, 소비전력</li>
                            <li>4. 에너지소비효율등급 (에너지이용합리화법 상 의무대상상품에 한함)</li>
							<li>5. 동일모델의 출시년월</li>
							<li>6. 제조사, 수입품의 경우 수입자를 함께 표기 (병행수입의 경우 병행수입 여부로 대체 가능)</li>
							<li>7. 제조국</li>
							<li>8. 크기, 무게 (무게는 노트북에 한함)</li>
							<li>9. 주요 사양 (컴퓨터와 노트북의 경우 성능, 용량, 운영체제 포함여부 등 / 프린터의 경우 인쇄 속도 등)</li>
							<li>10. 품질보증기준</li>
							<li>11. A/S 책임자와 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(11) 광학기기(디지털카메라 / 캠코더)</dt>
					<dd><ul class="detail">
							<li>1. 품명 및 모델명</li>
							<li>2. KC 인증 필 유무 (전파법 상 인증대상상품에 한함, MIC 인증 필 혼용 가능)</li>
							<li>3. 동일모델의 출시년월</li>
							<li>4. 제조사, 수입품의 경우 수입자를 함께 표기 (병행수입의 경우 병행수입 여부로 대체 가능)</li>
							<li>5. 제조국</li>
							<li>6. 크기, 무게</li>
							<li>7. 주요 사양</li>
							<li>8. 품질보증기준</li>
							<li>9. A/S 책임자와 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(12) 소형전자(MP3 / 전자사전 등)</dt>
					<dd><ul class="detail">
							<li>1. 품명 및 모델명</li>
							<li>2. KC 인증 필 유무 (전파법 상 인증대상상품에 한함, MIC 인증 필 혼용 가능) </li>
							<li>3. 정격전압, 소비전력</li>
							<li>4. 동일모델의 출시년월</li>
							<li>5. 제조사, 수입품의 경우 수입자를 함께 표기 (병행수입의 경우 병행수입 여부로 대체 가능)</li>
							<li>6. 제조국</li>
							<li>7. 크기, 무게</li>
							<li>8. 주요 사양</li>
							<li>9. 품질보증기준</li>
							<li>10. A/S 책임자와 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(13) 휴대폰</dt>
					<dd><ul class="detail">
							<li>1. 품명 및 모델명</li>
							<li>2. KC 인증 필 유무 (전파법 상 인증대상상품에 한함, MIC 인증 필 혼용 가능)</li>
							<li>3. 동일모델의 출시년월</li>
							<li>4. 제조사, 수입품의 경우 수입자를 함께 표기 (병행수입의 경우 병행수입 여부로 대체 가능)</li>
							<li>5. 제조국</li>
							<li>6. 크기, 무게</li>
							<li>7. 이동통신 가입조건</li>
							<li>7-1. 이동통신사</li>
							<li>7-2. 가입절차</li>
							<li>7-3. 소비자의 추가적인 부담사항 (가입비, 유심카드 구입비 등 추가로 부담하여야 할 금액, 부가서비스, 의무사용기간, 위약금 등)</li>
							<li>8. 주요사양</li>
							<li>9. 품질보증기준</li>
							<li>10. A/S 책임자와 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(14) 내비게이션</dt>
					<dd><ul class="detail">
							<li>1. 품명 및 모델명</li>
							<li>2. KC 인증 필 유무 (전파법 상 인증대상상품에 한함, MIC 인증 필 혼용 가능) </li>
							<li>3. 정격전압, 소비전력</li>
							<li>4. 동일모델의 출시년월</li>
							<li>5. 제조사, 수입품의 경우 수입자를 함께 표기 (병행수입의 경우 병행수입 여부로 대체 가능)</li>
							<li>6. 제조국</li>
							<li>7. 크기, 무게 </li>
							<li>8. 주요 사양</li>
							<li>9. 맵 업데이트 비용 및 무상기간</li>
							<li>10. 품질보증기준</li>
							<li>11. A/S 책임자와 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(15) 자동차용품 (자동차부품 / 기타 자동차용품)</dt>
					<dd><ul class="detail">
							<li>1. 품명 및 모델명</li>
							<li>2. 동일모델의 출시년월</li>
							<li>3. KC 인증 필 유무 (자동차관리법에 따른 자기인증 대상 자동차부품에 한함)</li>
							<li>4. 제조사, 수입품의 경우 수입자를 함께 표기 (병행수입의 경우 병행수입 여부로 대체 가능)</li>
							<li>5. 제조국</li>
							<li>6. 크기</li>
							<li>7. 적용차종</li>
                            <li>8. 제품사용으로 인한 위험 및 유의사항(연료절감장치에 한함)</li>
							<li>9. 품질보증기준</li>
							<li>10. A/S 책임자와 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(16) 의료기기</dt>
					<dd><ul class="detail">
							<li>1. 품명 및 모델명</li>
							<li>2. 의료기기법상 허가 · 신고 번호(허가 · 신고 대상 의료기기에 한함) 및 광고사전심의필 유무</li>
							<li>3. 정격전압, 소비전력 (전기용품에 한함)</li>
							<li>4. 동일모델의 출시년월</li>
							<li>5. 제조사, 수입품의 경우 수입자를 함께 표기 (병행수입의 경우 병행수입 여부로 대체 가능)</li>
							<li>6. 제조국</li>
							<li>7. 제품의 사용목적 및 사용방법</li>
							<li>8. 취급시 주의사항</li>
							<li>9. 품질보증기준</li>
							<li>10. A/S 책임자와 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(17) 주방용품</dt>
					<dd><ul class="detail">
							<li>1. 품명 및 모델명</li>
							<li>2. 재질</li>
							<li>3. 구성품</li>
							<li>4. 크기</li>
							<li>5. 동일모델의 출시년월</li>
							<li>6. 제조사, 수입품의 경우 수입자를 함께 표기 (병행수입의 경우 병행수입 여부로 대체 가능)</li>
							<li>7. 제조국</li>
                            <li>8. 식품위생법에 따른 수입 기구·용기의 경우 "식품위생법에 따른 수입신고를 필함"의 문구</li>
							<li>9. 품질보증기준</li>
							<li>10. A/S 책임자와 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(18) 화장품</dt>
					<dd><ul class="detail">
							<li>1. 용량 또는 중량</li>
							<li>2. 제품 주요 사양 (피부타입, 색상(호, 번) 등)</li>
							<li>3. 사용기한 또는 개봉 후 사용기간(개봉 후 사용기간을 기재할 경우에는 제조연월일을 병행표기)</li>
							<li>4. 사용방법</li>
							<li>5. 제조업자 및 제조판매업자</li>
							<li>6. 제조국</li>
							<li>7. 화장품법에 따라 기재·표시하여야 하는 모든 성분</li>
							<li>8. 기능성 화장품의 경우 화장품법에 따른 식품의약품안전청 심사 필 유무 (미백, 주름개선, 자외선차단 등)</li>
							<li>9. 사용할 때 주의사항</li>
							<li>10. 품질보증기준</li>
							<li>11. A/S 책임자와 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(19) 귀금속 / 보석 / 시계류</dt>
					<dd><ul class="detail">
							<li>1. 소재 / 순도 / 밴드재질 (시계의 경우)</li>
							<li>2. 중량</li>
							<li>3. 제조사, 수입품의 경우 수입자를 함께 표기 (병행수입의 경우 병행수입 여부로 대체 가능)</li>
							<li>4. 제조국 (원산지와 가공지 등이 다를 경우 함께 표기)</li>
							<li>5. 치수</li>
							<li>6. 착용 시 주의사항</li>
							<li>7. 주요 사양</li>
							<li>7-1. 귀금속, 보석류 - 등급</li>
							<li>7-2. 시계 - 기능, 방수 등</li>
							<li>8. 보증서 제공여부</li>
							<li>9. 품질보증기준</li>
							<li>10. A/S 책임자와 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(20) 식품(농수산물)</dt>
					<dd><ul class="detail">
							<li>1. 포장단위별 용량(중량), 수량, 크기</li>
                            <li>2. 생산자, 수입품의 경우 수입자를 함께 표기</li>
							<li>3. 농수산물의 원산지 표시에 관한 법률에 따른 원산지</li>
                            <li>4. 제조연월일(포장일 또는 생산연도), 유통기한 또는 품질유지기한</li>
							<li>5. 관련법상 표시사항</li>
							<li>5-1. 농산물 - 농산물품질관리법상 유전자변형농산물 표시, 지리적표시</li>
							<li>5-2. 축산물 - 축산법에 따른 등급 표시, 쇠고기의 경우 이력관리에 따른 표시 유무</li>
							<li>5-3. 수산물 - 수산물품질관리법상 유전자변형수산물 표시, 지리적표시</li>
                            <li>5-4. 수입식품에 해당하는 경우 "식품위생법에 따른 수입신고를 필함"의 문구</li>
							<li>6. 상품구성</li>
                            <li>7. 보관방법 또는 취급방법</li>
							<li>8. 소비자상담 관련 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(21) 가공식품</dt>
					<dd><ul class="detail">
							<li>1. 식품위생법에 따른 표시사항</li>
							<li>1-1. 식품의 유형</li>
							<li>1-2. 생산자 및 소재지(수입품의 경우 생산자, 수입자 및 제조국)</li>
							<li>1-3. 제조연월일, 유통기한 또는 품질유지기한</li>
							<li>1-4. 포장단위별 용량(중량), 수량</li>
                            <li>1-5. 원재료명 및 함량(농수산물의 원산지 표시에 관한 법률에 따른 원산지 표시 포함)</li>
                            <li>1-6. 영양성분(식품위생법에 따른 영양성분 표시대상 식품에 한함)</li>
                            <li>1-7. 유전자변형식품에 해당하는 경우의 표시</li>
                            <li>1-8. 영유아식 또는 체중조절식품 등에 해당하는 경우 표시광고사전심의필 유무 및 부작용 발생 가능성</li>
                            <li>1-9. 수입식품에 해당하는 경우 "식품위생법에 따른 수입신고를 필함"의 문구</li>
                            <li>2. 소비자상담 관련 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(22) 건강기능식품</dt>
					<dd><ul class="detail">
							<li>1. 건강기능식품에 관한 법률에 따른 표시사항</li>
                            <li>1-1. 식품의 유형</li>
                            <li>1-2. 제조업소의 명칭과 소재지(수입품의 경우 수입업소명, 제조업소명 및 수출국명)</li>
                            <li>1-3. 제조연월일, 유통기한 또는 품질유지기한</li>
                            <li>1-4. 포장단위별 용량(중량), 수량</li>
                            <li>1-5. 원재료명 및 함량(농수산물의 원산지 표시에 관한 법률에 따른 원산지 표시 포함)</li>
                            <li>1-6. 영양정보</li>
                            <li>1-7. 기능정보</li>
                            <li>1-8. 섭취량, 섭취방법 및 섭취 시 주의사항 및 부작용 가능성</li>
                            <li>1-9. 질병의 예방 및 치료를 위한 의약품이 아니라는 내용의 표현</li>
                            <li>1-10. 유전자변형건강기능식품에 해당하는 경우의 표시</li>
                            <li>1-11. 표시광고 사전심의필</li>
                            <li>1-12. 수입식품에 해당하는 경우 "건강기능식품에 관한 법률에 따른 수입신고를 필함"의 문구</li>
                            <li>2. 소비자상담 관련 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(23) 영유아용품</dt>
					<dd><ul class="detail">
							<li>1. 품명 및 모델명</li>
							<li>2. 어린이제품 안전 특별법 상 안전인증대상어린이제품, 안전확인대상어린이제품, 공급자적합성확인대상어린이제품에 대한 KC인증 필 유무</li>
							<li>3. 크기, 중량</li>
							<li>4. 색상</li>
							<li>5. 재질 (섬유의 경우 혼용률)</li>
							<li>6. 사용연령 또는 체중범위(어린이제품 안전 특별법에 따라 표시해야 하는 사항은 반드시 표기)</li>
							<li>7. 동일모델의 출시년월</li>
							<li>8. 제조사, 수입품의 경우 수입자를 함께 표기 (병행수입의 경우 병행수입 여부로 대체 가능)</li>
							<li>9. 제조국</li>
							<li>10. 취급방법 및 취급시 주의사항, 안전표시 (주의, 경고 등)</li>
							<li>11. 품질보증기준</li>
							<li>12. A/S 책임자와 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(24) 악기</dt>
					<dd><ul class="detail">
							<li>1. 품명 및 모델명</li>
							<li>2. 크기</li>
							<li>3. 색상</li>
							<li>4. 재질</li>
							<li>5. 제품 구성</li>
							<li>6. 동일모델의 출시년월</li>
							<li>7. 제조사, 수입품의 경우 수입자를 함께 표기 (병행수입의 경우 병행수입 여부로 대체 가능)</li>
							<li>8. 제조국</li>
							<li>9. 상품별 세부 사양</li>
							<li>10. 품질보증기준</li>
							<li>11. A/S 책임자와 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(25) 스포츠용품</dt>
					<dd><ul class="detail">
							<li>1. 품명 및 모델명</li>
							<li>2. 크기, 중량</li>
							<li>3. 색상</li>
							<li>4. 재질</li>
							<li>5. 제품 구성</li>
							<li>6. 동일모델의 출시년월</li>
							<li>7. 제조사, 수입품의 경우 수입자를 함께 표기 (병행수입의 경우 병행수입 여부로 대체 가능)</li>
							<li>8. 제조국</li>
							<li>9. 상품별 세부 사양</li>
							<li>10. 품질보증기준</li>
							<li>11. A/S 책임자와 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(26) 서적</dt>
					<dd><ul class="detail">
							<li>1. 도서명</li>
							<li>2. 저자, 출판사</li>
							<li>3. 크기 (전자책의 경우 파일의 용량)</li>
							<li>4. 쪽수 (전자책의 경우 제외)</li>
							<li>5. 제품 구성 (전집 또는 세트일 경우 낱권 구성, CD 등)</li>
							<li>6. 출간일</li>
							<li>7. 목차 또는 책소개(아동용 학습교재의 경우 사용연령을 포함)</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(27) 호텔 / 펜션 예약</dt>
					<dd><ul class="detail">
							<li>1. 국가 또는 지역명</li>
							<li>2. 숙소형태</li>
							<li>3. 등급, 객실타입</li>
							<li>4. 사용가능 인원, 인원 추가 시 비용</li>
							<li>5. 부대시설, 제공 서비스 (조식 등)</li>
							<li>6. 취소 규정 (환불, 위약금 등)</li>
							<li>7. 예약담당 연락처</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(28) 여행패키지</dt>
					<dd><ul class="detail">
							<li>1. 여행사</li>
							<li>2. 이용항공편</li>
							<li>3. 여행기간 및 일정</li>
							<li>4. 총 예정 인원, 출발 가능 인원</li>
							<li>5. 숙박정보</li>
							<li>6. 여행상품 가격(유류할증료, 공항이용료, 전쟁보험료, 관광진흥개발기금, 운송요금, 숙박요금, 식사요금, 가이드 경비, 여행자보험료, 현지관광입장료 등 소비자가 특정 여행상품을 선택할 경우 부담해야 하는 모든 경비가 포함되어야 함. 다만, 가이드 경비를 현지에서 지불해야하는 경우 별도로 그 금액을 표시할 수 있으며, 현지에서 별도로 지불해야 한다는 점을 표시하여야 함)</li>
							<li>7. 선택경비 유무 및 세부 내용</li>
                            <li>7-1. 선택경비 유무 등(선택관광 경비 등 현지에서 개별 구매자의 필요나 선택에 의하여 지출하게 되는 경비가 있는지 여부 및 소비자의 선택에 따라 자유롭게 지불할 수 있다는 점을 함께 표시하여야 함)</li>
                            <li>7-2. 선택관광 및 대체일정(선택관광 경비의 금액 및 선택관광을 선택하지 않을 경우의 대체 일정을 함께 표시하여야 함)</li>
                            <li>7-3. 가이드 팁(가이드 팁에 대하여 기재할 경우에는 가이드 경비와 구별하여 자유롭게 지불여부를 결정할 수 있음을 표시하여야 함. 다만, 정액으로 지불을 권장하는 등 소비자가 필수적으로 지불하여야 하는 경비인 것처럼 오인하지 않도록 표시하여야 함)</li>
							<li>8. 취소 규정 (환불, 위약금 등)</li>
							<li>9. 해외여행의 경우 외교통상부가 지정하는 여행경보단계</li>
							<li>10. 예약담당 연락처</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(29) 항공권</dt>
					<dd><ul class="detail">
							<li>1. 요금조건, 왕복 · 편도 여부</li>
							<li>2. 유효기간</li>
							<li>3. 제한사항 (출발일, 귀국일 변경가능 여부 등)</li>
							<li>4. 티켓수령방법</li>
							<li>5. 좌석종류</li>
							<li>6. 가격에 포함되지 않은 내역 및 금액 (유류할증료, 공항이용료 등)</li>
							<li>7. 취소 규정 (환불, 위약금 등)</li>
							<li>8. 예약담당 연락처</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(30) 자동차 대여 서비스 (렌터카)</dt>
					<dd><ul class="detail">
							<li>1. 차종</li>
							<li>2. 소유권 이전 조건 (소유권이 이전되는 경우에 한함)</li>
							<li>3. 추가 선택 시 비용 (자차면책제도, 내비게이션 등)</li>
							<li>4. 차량 반환 시 연료대금 정산 방법</li>
							<li>5. 차량의 고장 · 훼손 시 소비자 책임</li>
							<li>6. 예약 취소 또는 중도 해약 시 환불 기준</li>
							<li>7. 소비자상담 관련 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(31) 물품대여 서비스 (정수기, 비데, 공기청정기 등)</dt>
					<dd><ul class="detail">
							<li>1. 품명 및 모델명</li>
							<li>2. 소유권 이전 조건 (소유권이 이전되는 경우에 한하며, 소유권 이전에 필요한 렌탈기간 또는 총 렌탈금액 등 요건을 구체적으로 명시)</li>
							<li>3. 유지보수 조건 (점검 · 필터교환 주기, 추가 비용 등)</li>
							<li>4. 상품의 고장 · 분실 · 훼손 시 소비자 책임</li>
							<li>5. 중도 해약 시 환불 기준</li>
							<li>6. 제품 사양 (용량, 소비전력 등)</li>
							<li>7. 소비자상담 관련 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(32) 물품대여 서비스 (서적, 유아용품, 행사용품 등)</dt>
					<dd><ul class="detail">
							<li>1. 품명 및 모델명</li>
							<li>2. 소유권 이전 조건 (소유권이 이전되는 경우에 한하며, 소유권 이전에 필요한 렌탈기간 또는 총 렌탈금액 등 요건을 구체적으로 명시)</li>
							<li>3. 상품의 고장 · 분실 · 훼손 시 소비자 책임</li>
							<li>4. 중도 해약 시 환불 기준</li>
							<li>5. 소비자상담 관련 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(33) 디지털 콘텐츠 (음원, 게임, 인터넷강의 등)</dt>
					<dd><ul class="detail">
							<li>1. 제작자 또는 공급자</li>
							<li>2. 이용조건, 이용기간</li>
							<li>3. 상품 제공 방식 (CD, 다운로드, 실시간 스트리밍 등)</li>
							<li>4. 최소 시스템 사양, 필수 소프트웨어</li>
							<li>5. 청약철회 또는 계약의 해제 · 해지에 따른 효과</li>
							<li>6. 소비자상담 관련 전화번호</li>
						</ul></dd>
				</dl>


				<dl>
					<dt>(34) 상품권 / 쿠폰</dt>
					<dd><ul class="detail">
							<li>1. 발행자</li>
							<li>2. 유효기간, 이용조건 (유효기간 경과 시 보상 기준, 사용제한품목 및 기간 등)</li>
							<li>3. 이용 가능 매장</li>
							<li>4. 잔액 환급 조건</li>
							<li>5. 소비자상담 관련 전화번호</li>
						</ul></dd>
				</dl>

                <dl>
                    <dt>(35) 모바일 쿠폰</dt>
                    <dd><ul class="detail">
                            <li>1. 발행자</li>
                            <li>2. 유효기간, 이용조건 (유효기간 경과시 보상 기준 포함)</li>
                            <li>3. 이용 가능 매장</li>
                            <li>4. 환불조건 및 방법</li>
                            <li>5. 소비자상담 관련 전화번호</li>
                        </ul></dd>
                </dl>

                <dl>
                    <dt>(36) 영화·공연</dt>
                    <dd><ul class="detail">
                            <li>1. 주최 또는 기획(공연에 한함)</li>
                            <li>2. 주연(공연에 한함)</li>
                            <li>3. 관람등급</li>
                            <li>4. 상영·공연시간</li>
                            <li>5. 상영·공연장소</li>
                            <li>6. 예매 취소 조건</li>
                            <li>7. 취소·환불방법</li>
                            <li>8. 소비자상담 관련 전화번호</li>
                        </ul></dd>
                </dl>

                <dl>
                    <dt>(37) 기타 용역</dt>
                    <dd><ul class="detail">
                            <li>1. 서비스 제공 사업자</li>
                            <li>2. 법에 의한 인증·허가 등을 받았음을 확인할 수 있는 경우 그에 대한 사항</li>
                            <li>3. 이용조건 (이용가능 기간·장소, 추가비용 등)</li>
                            <li>4. 취소·중도해약·해지 조건 및 환불기준</li>
                            <li>5. 취소·환불방법</li>
                            <li>6. 소비자상담 관련 전화번호</li>
                        </ul></dd>
                </dl>


				<dl>
					<dt>(38) 기타 재화</dt>
					<dd><ul class="detail">
							<li>1. 품명 및 모델명</li>
							<li>2. 법에 의한 인증 · 허가 등을 받았음을 확인할 수 있는 경우 그에 대한 사항</li>
							<li>3. 제조국 또는 원산지</li>
							<li>4. 제조자, 수입품의 경우 수입자를 함께 표기</li>
							<li>5. A/S 책임자와 전화번호 또는 소비자상담 관련 전화번호</li>
						</ul></dd>
				</dl>
			</div>

		</td></tr>
	</tbody></table>

<script type="text/javascript">
	$(document).ready(function()
	{

		$("#el-group-info-wrap dl").hide();

	});


	function view_must_info() {

		var idx = $("#groupList option").index($("#groupList option:selected"))-1;
		$("#el-group-info-wrap dl").hide();
		$('#el-group-info-wrap dl:eq('+idx+')').show();


	}
</script>
