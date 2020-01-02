<!--抗原产品清单页面-->

<?php
include "footer-header/header.php";
?>
<link rel="stylesheet" href="skin\product-list\css\main.css">



<div class="container">
    <div class="component">
        <div class="title">维润赛润产品目录——抗原系列</div>
        <table>
            <thead>
            <tr>
                <th>货号</th>
                <th>产品</th>
                <th>英文名称</th>
                <th width="120px">来源</th>
            </tr>
            </thead>
            <tbody>
            <tbody>
            <tr onclick="toProducts(0, 0)">
                <td>BA109VS</td>
                <td>巨细胞病毒抗原</td>
                <td>Cytomegalovirus (CMV) Antigen</td>
                <td >天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 1)">
                <td>BA110VS</td>
                <td>弓形虫抗原</td>
                <td>Toxoplasma gondii Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 2)">
                <td>BA129G2VS</td>
                <td>风疹病毒抗原</td>
                <td>Rubella Virus Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 3)">
                <td>BA1051VS</td>
                <td>单纯疱疹病毒（1型）抗原</td>
                <td>HSV-1 Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 3)">
                <td>BA1051RVS-G</td>
                <td>单纯疱疹病毒（1型）糖蛋白G</td>
                <td>HSV-1 Glycoprotein G</td>
                <td>重组蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 4)">
                <td>BA1052VS</td>
                <td>单纯疱疹病毒（2型）抗原</td>
                <td>HSV-2 Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 4)">
                <td>BA1052RVS-G</td>
                <td>单纯疱疹病毒（2型）糖蛋白G</td>
                <td>HSV-2 Glycoprotein G</td>
                <td>重组蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 5)">
                <td>BA127VS</td>
                <td>肺炎支原体抗原</td>
                <td>Mycoplasma pneumoniae
                    Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 5)">
                <td>BA127VSP1</td>
                <td>肺炎支原体粘附蛋白P1</td>
                <td>Mycoplasma pneumoniae
                    P1</td>
                <td>重组蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 6)">
                <td>BA1371VS</td>
                <td>肺炎衣原体抗原（优质）</td>
                <td>Chlamydia pneumoniae
                    Antigen (Premium)</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 6)">
                <td>BA1371VSER</td>
                <td>肺炎衣原体抗原</td>
                <td>Chlamydia pneumoniae
                    Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 7)">
                <td>BA113VS</td>
                <td>呼吸道合胞病毒抗原</td>
                <td>Respiratory Syncytial
                    Virus (RSV) Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 8)">
                <td>BA128VS</td>
                <td>腺病毒2型六联体蛋白</td>
                <td>Adenovirus Type 2
                    Hexon</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 9)">
                <td>BA1261VS</td>
                <td>副流感病毒（1型）抗原</td>
                <td>Parainfluenza Virus
                    Type 1 Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 9)">
                <td>BA1262VS</td>
                <td>副流感病毒（2型）抗原</td>
                <td>Parainfluenza Virus
                    Type 2 Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 9)">
                <td>BA1263VS</td>
                <td>副流感病毒（3型）抗原</td>
                <td>Parainfluenza Virus
                    Type 3 Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 10)">
                <td>BA106VS</td>
                <td>嗜肺军团菌抗原</td>
                <td>Legionella
                    pneumophila Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 11)">
                <td>BA120VS3</td>
                <td>百日咳杆菌丝状血凝素</td>
                <td>Bordetella pertussis
                    Filamentous Hemagglutinin (FHA)</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 11)">
                <td>BA120VS4</td>
                <td>百日咳毒素</td>
                <td>Bordetella pertussis
                    Toxin（PT）</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 11)">
                <td>BA120VS8</td>
                <td>百日咳全细胞抗原</td>
                <td>Bordetella pertussis
                    whole-cell Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 12)">
                <td>BA103VS</td>
                <td>腮腺炎病毒抗原</td>
                <td>Mumps Virus Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 13)">
                <td>BA134VS01</td>
                <td>柯萨奇病毒抗原</td>
                <td>Coxsackievirus
                    Antigen</td>
                <td>重组蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 14)">
                <td>BA135VS01</td>
                <td>埃可病毒抗原</td>
                <td>Echovirus Antigen</td>
                <td>重组蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 15)">
                <td>BA133VS01</td>
                <td>肠道病毒抗原</td>
                <td>Enterovirus Antigen</td>
                <td>重组蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 16)">
                <td>BA122VSNS1</td>
                <td>细小病毒B19非结构蛋白NS1</td>
                <td>Parvovirus NS1</td>
                <td>重组蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 16)">
                <td>BA122VSVP1A</td>
                <td>细小病毒B19 PepA蛋白（VP1
                        aa 1-230）</td>
                <td>Parvovirus PepA(VP1
                    unique)</td>
                <td>重组蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 16)">
                <td>BA122VSVP1B</td>
                <td>细小病毒B19 PepB蛋白（VP1
                        aa 485-781）</td>
                <td>Parvovirus PepB(VP2
                    C-term.)</td>
                <td>重组蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 16)">
                <td>BA122VSVP1C</td>
                <td>细小病毒B19 PepC蛋白（VP1
                        aa 1-486）</td>
                <td>Parvovirus PepC(VP1
                    N-term.)</td>
                <td>重组蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 16)">
                <td>BA122VSVP1D</td>
                <td>细小病毒B19 PepD蛋白（VP1
                        aa 313-781）</td>
                <td>Parvovirus PepD(VP1
                    C-term.)</td>
                <td>重组蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 16)">
                <td>BA122VSVP1</td>
                <td>细小病毒B19 VP1蛋白（aa
                        1-781）</td>
                <td>Parvovirus VP1</td>
                <td>重组蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 16)">
                <td>BA122VSVP1E</td>
                <td>细小病毒B19 VP2蛋白（aa
                        233-781）</td>
                <td>Parvovirus VP2</td>
                <td>重组蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 16)">
                <td>BA122VSVP2</td>
                <td>细小病毒B19 VP2蛋白（aa
                        228-781）</td>
                <td>Parvovirus VP2 VLP</td>
                <td>重组蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 17)">
                <td>BA1361R01</td>
                <td>EB病毒衣壳蛋白P18</td>
                <td>EBV Capsid Antigen
                    P18</td>
                <td>重组蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 17)">
                <td>BA1361VSR21</td>
                <td>EB病毒衣壳蛋白P23</td>
                <td>EBV Capsid Antigen
                    P23</td>
                <td>重组蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 17)">
                <td>BA1363VSR6</td>
                <td>EB病毒早期蛋白P138</td>
                <td>EBV Early Antigen
                    P138</td>
                <td>重组蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 17)">
                <td>BA1363P54VS</td>
                <td>EB病毒早期蛋白P54</td>
                <td>EBV Early Antigen P54</td>
                <td>重组蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 17)">
                <td>BA1362VS</td>
                <td>EB病毒核蛋白EBNA1 P72</td>
                <td>EBV Nuclear Antigen
                    EBNA1，P72</td>
                <td>重组蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 18)">
                <td>BA117VS</td>
                <td>白色念珠菌抗原</td>
                <td>Candida albicans</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 19)">
                <td>BA118VS</td>
                <td>幽门螺旋杆菌抗原</td>
                <td>Helicobacter pylori
                    Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 20)">
                <td>BA102VS-S</td>
                <td>麻疹病毒抗原（优质）</td>
                <td>Measles Virus Antigen
                    - Premium</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 20)">
                <td>BA102VS</td>
                <td>麻疹病毒抗原</td>
                <td>Measles Virus Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 21)">
                <td>BA1193VS</td>
                <td>轮状病毒抗原</td>
                <td>Rotavirus Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 22)">
                <td>BA104VS</td>
                <td>水痘-带状疱疹病毒抗原</td>
                <td>Varicella Zoster
                    Virus (VZV) Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 22)">
                <td>BA104VSG</td>
                <td>水痘-带状疱疹病毒糖蛋白抗原</td>
                <td>Varicella Zoster
                    Virus (VZV) Glycoprotein</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 23)">
                <td>BA1373VSER</td>
                <td>流产嗜性衣原体抗原</td>
                <td>Chlamydia abortus
                    Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 24)">
                <td>BA1372VSER</td>
                <td>沙眼衣原体抗原</td>
                <td>Chlamydia trachomatis Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 24)">
                <td>BA1372VSR2</td>
                <td>沙眼衣原体主要外膜蛋白</td>
                <td>Chlamydia trachomatis MOMP</td>
                <td>重组蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 25)">
                <td>BA138VS</td>
                <td>耶尔森菌（O:3血清型）抗原</td>
                <td>Yersinia enterocolitica O:3 YOP Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 25)">
                <td>BA13808VS</td>
                <td>耶尔森菌（O:8血清型）抗原</td>
                <td>Yersinia enterocolitica O:8 YOP Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 25)">
                <td>BA13809VS</td>
                <td>耶尔森菌（O:9血清型）抗原</td>
                <td>Yersinia enterocolitica O:9 YOP Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 26)">
                <td>BA139VS</td>
                <td>空肠弯曲杆菌抗原</td>
                <td>Campylobacter jejuni Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 27)">
                <td>BA116VS</td>
                <td>布鲁氏杆菌抗原</td>
                <td>Brucella abortus Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 28)">
                <td>BA121VS</td>
                <td>阿弗西尼疏螺旋体抗原</td>
                <td>Borrelia afzelii Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 28)">
                <td>BA121GVS</td>
                <td>伽氏疏螺旋体抗原</td>
                <td>Borrelia garinii
                    Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 28)">
                <td>BA121R01</td>
                <td>阿弗西尼疏螺旋体（Pko株）核心结合蛋白A（DbpA）</td>
                <td>Borrelia afzelii PKo DbpA</td>
                <td>重组蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 28)">
                <td>BA121R02</td>
                <td>阿弗西尼疏螺旋体（Pko株）外膜蛋白C（OspC）</td>
                <td>Borrelia afzelii PKo OspC</td>
                <td>重组蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 29)">
                <td>BA125VS</td>
                <td>双曲钩端螺旋体抗原</td>
                <td>Leptospira biflexa
                    Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 30)">
                <td>BA107VS</td>
                <td>细粒棘球绦虫抗原</td>
                <td>Echinococcus granulosus Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 31)">
                <td>BA112VS</td>
                <td>森林脑炎病毒抗原（优质）</td>
                <td>Tick-borne
                    encephalitis (TBE) Virus Antigen - Premium</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 31)">
                <td>BA112VSL</td>
                <td>森林脑炎病毒抗原</td>
                <td>Tick-borne
                    encephalitis (TBE) Virus Antigen</td>
                <td>天然蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 32)">
                <td>BA148R2</td>
                <td>基孔肯雅病毒糖蛋白E1</td>
                <td>Chikungunya
                    Glycoprotein E1</td>
                <td>重组蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 32)">
                <td>BA148R3</td>
                <td>基孔肯雅病毒（(A226V突变体）糖蛋白E1</td>
                <td>Chikungunya
                    Glycoprotein E1 (A226V)</td>
                <td>重组蛋白</td>
            </tr>
            <tr onclick="toProducts(0, 32)">
                <td>BA148R1</td>
                <td>基孔肯雅病毒糖蛋白E2</td>
                <td>Chikungunya
                    Glycoprotein E3</td>
                <td>重组蛋白</td>
            </tr></tbody>
            </tbody>
        </table>
    </div>
</div>
<script src="skin\product-list\js\jquery.min.js"></script>
<script src="skin\product-list\js\main.js"></script>

<?php
include "footer-header/footer.php";

?>

