// VM层
var vm = new Vue({
    el: "#products",
    methods: {
        showContent2(i, j){
            this.currentIndex = [i, j, false]
            this.currentPageTitle = this.Nav2[i][j].replace(/（\d+）/g,"")
            this.currentTitle = this.Nav1[i] + " > " + this.Nav2[i][j] + " > "
        },
        showContent3(i, j, k){
            this.currentIndex = [i, j, k]
            this.currentTitle = this.Nav1[i] + " > " + this.Nav2[i][j] + this.Nav3[i][j][k] + " > "
            this.currentPageTitle = this.Nav3[i][j][k].split("（")[0]
        },
        showProductList(){
            return this.productsList1[this.currentIndex[0]][this.currentIndex[1]].slice(2)
        }
    },
    data: {
        currentIndex: [0, 0, false],
        currentTitle: "抗原（63） > 巨细胞病毒（1） > ",
        currentPageTitle: "巨细胞病毒",
        content_title: ["抗原", "人源化单抗", "原辅料"],
        // Nav的所有字段
        Nav1: ['抗原（63）', "人源化单抗（16）", "原辅料"],
        Nav2: [
            ["巨细胞病毒（1）", "弓形虫（1）", "风疹病毒（1）", "单纯疱疹病毒（1型）（2）", "单纯疱疹病毒（2型）（2）", "肺炎支原体（2）", "肺炎衣原体（2）", "呼吸道合胞病毒（1）", "人腺病毒（1）", "副流感病毒（3）", "嗜肺军团菌（1）", "百日咳杆菌（3）", "腮腺炎病毒（1）", "柯萨奇病毒（1）", "埃可病毒（1）", "肠道病毒（1）", "细小病毒B19（8）", "EB病毒（5）", "白色念珠菌（1）", "幽门螺旋杆菌（1）", "麻疹病毒（2）", "轮状病毒（1）", "水痘-带状疱疹病毒（2）", "流产嗜性衣原体（1）", "沙眼衣原体（2）", "耶尔森氏菌（3）", "空肠弯曲杆菌（1）", "布鲁氏杆菌（1）", "伯氏疏螺旋体（4）", "双曲钩端螺旋体（1）", "细粒棘球绦虫（1）", "森林脑炎病毒（2）", "基孔肯雅病毒（3）"],
            ["抗巨细胞病毒（2）", "抗弓形虫（1）", "抗单纯疱疹病毒（1）", "抗水痘带状疱疹病毒（2）", "抗风疹病毒（2）", "抗麻疹病毒（1）", "抗腮腺炎病毒（2）", "抗EB病毒（1）", "抗肺炎衣原体（1）", "抗肺炎支原体（1）", "抗寨卡病毒（1）", "抗登革热病毒（1）"],
            ["微球","牛血清白蛋白", "类风湿因子吸附剂"]
        ],
        Nav3: [
            // 抗原
            [],
            // 人源化单抗
            [],
            // 原辅料
            [
                []
            ]
        ],
        /** 产品列表 **/
        // 产品背景
        // 注意事项
        // 产品信息
        productsList1: [
            // 0 抗原
            [
                // 巨细胞病毒（1）
                [
                    ["巨细胞病毒（Cytomegalovirus）是一种疱疹病毒组的DNA病毒，可引起以生殖泌尿系统、中枢神经系统和肝脏疾患为主的各系统感染。"],
                    [""],
                    ["BA109VS", "巨细胞病毒抗原", "Cytomegalovirus (CMV) Antigen ", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 弓形虫（1）
                [
                    ["弓形虫（Toxoplasma gondii）是弓形虫病的病原体，可引发先天性弓形虫病导致自然流产、新生儿严重感染等。"],
                    [""],
                    ["BA110VS", "弓形虫抗原", "Toxoplasma gondii Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 风疹病毒（1）
                [
                    ["风疹病毒（Rubella Virus）是风疹的病原体，可引起淋巴结肿大和先天性疾病。"],
                    [""],
                    ["BA129G2VS", "风疹病毒抗原", "Rubella Virus Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 单纯疱疹病毒（1型）（2）
                [
                    [" 单纯疱疹病毒（1型，Herpes simplex virus-1）属于人类疱疹病毒，可引起发热、脑炎、皮肤疱疹性湿疹。"],
                    ["·安全性：实验操作时应严格按照实验室生物、化学安全规定进行。<br />" +
                    "·用途：本 产品仅供于科研或体外诊断用，不能用于人体实验或治疗。"],
                    ["BA1051VS", "单纯疱疹病毒（1型）抗原", "HSV-1 Antigen ", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA1051RVS-G", "单纯疱疹病毒（1型）糖蛋白G", "HSV-1 Glycoprotein G", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                ],
                // 单纯疱疹病毒（2型）（2）
                [
                    ["单纯疱疹病毒（2型，Herpes simplex virus-2）属于人类疱疹病毒，可引起生殖器疱疹、生殖器外损伤和无菌性脑膜炎。"],
                    [""],
                    ["BA1052VS", "单纯疱疹病毒（2型）抗原", "HSV-2 Antigen ", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA1052RVS-G", "单纯疱疹病毒（2型）糖蛋白G", "HSV-2 Glycoprotein G ", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 肺炎支原体（2）
                [
                    ["肺炎支原体（Mycoplasma pneumoniae）是原发性非典型肺炎的病原体，可引起头痛、咳嗽等一般的呼吸道症状。"],
                    [""],
                    [" BA127VS", "肺炎支原体抗原", "Mycoplasma pneumoniae Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    [" BA127VSP1", "肺炎支原体粘附蛋白P1", "Mycoplasma pneumoniae P1", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 肺炎衣原体（2）
                [
                    ["肺炎衣原体（Chlamydia pneumoniae）是肺炎的病原体，主要引起呼吸道和肺部感染。"],
                    [""],
                    ["BA1371VS", "肺炎衣原体抗原（优质）", "Chlamydia pneumoniae Antigen (Premium) ", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA1371VSER", "肺炎衣原体抗原", "Chlamydia pneumoniae Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 呼吸道合胞病毒（1）
                [
                    ["呼吸道合胞病毒（Respiratory Syncytial Virus）是小儿病毒性肺炎的常见病原体，可引起间质性肺炎和毛细支气管炎。"],
                    [""],
                    [" BA113VS", "呼吸道合胞病毒抗原", "Respiratory Syncytial Virus (RSV) Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 人腺病毒（1）
                [
                    ["人腺病毒（Adenovirus）可引起多种疾病，包括呼吸系统疾病和腹泻。<br />" +
                    "其中腺病毒2型（Adenoid 6株）的致病性主要表现为可以导致儿童上呼吸道感染。"],
                    [""],
                    ["BA128VS", "腺病毒2型六联体蛋白", "Adenovirus Type 2 Hexon", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 副流感病毒（3）
                [
                    ["副流感病毒（Parainfluenza Virus）是副流行性感冒的病原体，可引起哮、呼吸困难等症状。"],
                    [""],
                    ["BA1261VS", "副流感病毒（1型）抗原", "Parainfluenza Virus Type 1 Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA1262VS ", "副流感病毒（2型）抗原", "Parainfluenza Virus Type 2 Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA1263VS ", "副流感病毒（3型）抗原", "Parainfluenza Virus Type 3 Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 嗜肺军团菌（1）
                [
                    ["嗜肺军团菌（Legionella pneumophila）是军团菌肺炎的病原体，可引起高热、呼吸困难、水泻等。"],
                    [""],
                    ["BA106VS", "嗜肺军团菌抗原", "Legionella pneumophila Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 百日咳杆菌（3）
                [
                    ["百日咳杆菌（Bordetella pertussis）可引起人类百日咳。<br />" +
                    "其中，丝状血凝素（FHA）可帮助细菌粘附在宿主细胞上，百日咳毒素（PT）可使细菌破坏宿主的上皮层，并躲避宿主的免疫系统，在致病机制中起重要作用。"],
                    [""],
                    ["BA120VS3", "百日咳杆菌丝状血凝素", "Bordetella pertussis Filamentous Hemagglutinin (FHA) ", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA120VS4", "百日咳毒素", "Bordetella pertussis Toxin（PT）", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA120VS8", "百日咳全细胞抗原", "Bordetella pertussis whole-cell Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 腮腺炎病毒（1）
                [
                    [" 腮腺炎病毒（Mumps Virus）是流行性腮腺炎的病原体，可引起发热、生殖系统并发症和神经系统并发症等。"],
                    [""],
                    ["BA103VS", "腮腺炎病毒抗原", "Mumps Virus Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 柯萨奇病毒（1）
                [
                    ["柯萨奇病毒（Coxsachievirus）是手足口病的病原体，可引起病毒性脑炎和心肌炎，妊娠期感染可引起非麻痹性脊髓灰质炎性病变。"],
                    [""],
                    ["BA134VS01", "柯萨奇病毒抗原", "Coxsackievirus Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 埃可病毒（1）
                [
                    [" 埃可病毒（Echovirus）是手足口病的病原体，可引起包括普通感冒和严重的病毒性脑炎等。"],
                    [""],
                    [" BA135VS01", "埃可病毒抗原", "Echovirus Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 肠道病毒（1）
                [
                    ["肠道病毒（Enterovirus）是手足口病的病原体，可引起小儿麻痹等。"],
                    [""],
                    ["BA133VS01", "肠道病毒抗原", "Enterovirus Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 细小病毒B19（8）
                [
                    ["  细小病毒B19（Parvovirus B19）是人类常见病毒之一，可引起传染性红斑、孕期流产和死胎等。"],
                    [""],
                    [" BA122VSNS1", "细小病毒B19非结构蛋白NS1", "Parvovirus NS1", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA122VSVP1A", "细小病毒B19 PepA蛋白（VP1 aa 1-230）", "Parvovirus PepA(VP1 unique) ", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA122VSVP1B", "细小病毒B19 PepB蛋白（VP1 aa 485-781）", "Parvovirus PepB(VP2 C-term.)", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA122VSVP1C", "细小病毒B19 PepC蛋白（VP1 aa 1-486）", "Parvovirus PepC(VP1 N-term.)", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    [" BA122VSVP1D", "细小病毒B19 PepD蛋白（VP1 aa 313-781）", "Parvovirus PepD(VP1 C-term.)", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA122VSVP1", "细小病毒B19 VP1蛋白（aa 1-781）", "Parvovirus VP1", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    [" BA122VSVP1E", "细小病毒B19 VP2蛋白（aa 233-781）", "Parvovirus VP2", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA122VSVP2", "细小病毒B19 VP2蛋白（aa 228-781）", "Parvovirus VP2 VLP", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // EB病毒（5）
                [
                    ["EB病毒（Epstein-Barr virus）属于人类疱疹病毒，可引起单核细胞增多、腺热等症状。"],
                    [""],
                    ["BA1361R01", "EB病毒衣壳蛋白P18", "EBV Capsid Antigen P18", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA1361VSR21", "EB病毒衣壳蛋白P23", "EBV Capsid Antigen P23", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA1363VSR6", "EB病毒早期蛋白P138", "EBV Early Antigen P138 ", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA1363P54VS", "EB病毒早期蛋白P54", "EBV Early Antigen P54", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA1362VS", "EB病毒核蛋白EBNA1 P72", "EBV Nuclear Antigen EBNA1，P72", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 白色念珠菌（1）
                [
                    [" 白色念珠菌（Candida albicans）是人类机会性口腔和生殖器感染的致病因子。"],
                    [""],
                    ["BA117VS", "白色念珠菌抗原", "Candida albicans", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 幽门螺旋杆菌（1）
                [
                    ["幽门螺旋杆菌（Helicobacter pylori）是慢性胃病的病原体之一，可引起慢性胃炎和溃疡病等。"],
                    [""],
                    ["BA118VS", "幽门螺旋杆菌抗原", "Helicobacter pylori Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 麻疹病毒（2）
                [
                    ["麻疹病毒（Measles Virus）是麻疹的病原体，可引起发热、肺炎、脑炎等症状，是儿童最常见的急性传染病。"],
                    [""],
                    [" BA102VS-S", "麻疹病毒抗原（优质）", "Measles Virus Antigen - Premium", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA102VS", "麻疹病毒抗原", "Measles Virus Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 轮状病毒（1）
                [
                    ["轮状病毒（Rotavirus Antigen）是引起婴儿腹泻的主要病原体之一，可造成细胞损伤和急性肠胃炎等。"],
                    [""],
                    ["BA1193VS", "轮状病毒抗原", "Rotavirus Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 水痘-带状疱疹病毒（2）
                [
                    ["水痘带状疱疹病毒（Varicella Zoster Virus ，VZV）是带状疱疹的病原体，引起急性炎症性皮肤病，可导致并发性肺炎、胎儿畸形和流产等。"],
                    [""],
                    ["BA104VS", "水痘-带状疱疹病毒抗原", "Varicella Zoster Virus (VZV) Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA104VSG", "水痘-带状疱疹病毒糖蛋白抗原", "Varicella Zoster Virus (VZV) Glycoprotein", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 流产嗜性衣原体（1）
                [
                    ["流产嗜性衣原体（Chlamydia abortus）是人兽共患病病原，可引起孕妇流产及全身感染等症状。"],
                    [""],
                    ["BA1373VSER", "流产嗜性衣原体抗原", "Chlamydia abortus Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 沙眼衣原体（2）
                [
                    ["沙眼衣原体（Chlamydia trachomatis）可引起沙眼、包涵体包膜炎和性病淋巴肉芽肿等疾病。"],
                    [""],
                    ["BA1372VSER", "沙眼衣原体抗原", "Chlamydia trachomatis Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA1372VSR2 ", "沙眼衣原体主要外膜蛋白", "Chlamydia trachomatis MOMP ", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 耶尔森氏菌（3）
                [
                    ["耶尔森氏菌（Yersinia enterocolitica）是小肠结肠炎的病原菌，可引起肠胃炎，导致腹泻、发热等。"],
                    [""],
                    [" BA138VS", "耶尔森菌（O:3血清型）抗原", "Yersinia enterocolitica O:3 YOP Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA13808VS ", "耶尔森菌（O:8血清型）抗原", "Yersinia enterocolitica O:8 YOP Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA13809VS", "耶尔森菌（O:9血清型）抗原", "Yersinia enterocolitica O:9 YOP Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 空肠弯曲杆菌（1）
                [
                    ["空肠弯曲杆菌（Campylobacter jejuni）是空肠弯曲菌病的病原体，可引起腹痛、腹泻、头痛、发热等胃肠炎症状。"],
                    [""],
                    ["BA139VS", "空肠弯曲杆菌抗原", "Campylobacter jejuni Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 布鲁氏杆菌（1）
                [
                    ["布鲁氏杆菌（Brucella abortus）是布鲁氏菌病的病原体，可引起人畜共患的急、慢性传染病。"],
                    [""],
                    ["BA116VS", "布鲁氏杆菌抗原", "Brucella abortus Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 伯氏疏螺旋体（4）
                [
                    ["伯氏疏螺旋体（Borrelia Burgdorferi）是莱姆病的病原体，可引起包括神经、心脏、关节等多个系统的疾病。<br />" +
                    "其中阿弗西尼疏螺旋体（Borrelia afzelii）和伽氏疏螺旋体（Borrelia garinii）是伯氏疏螺旋体的重要分型。"],
                    [""],
                    ["BA121VS", "阿弗西尼疏螺旋体抗原", "Borrelia afzelii Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA121GVS", "伽氏疏螺旋体抗原", "Borrelia garinii Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA121R01", "阿弗西尼疏螺旋体（Pko株）核心结合蛋白A（DbpA）", "Borrelia afzelii PKo DbpA", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA121R02", "阿弗西尼疏螺旋体（Pko株）外膜蛋白C（OspC）", "Borrelia afzelii PKo OspC", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 双曲钩端螺旋体（1）
                [
                    ["双曲钩端螺旋体（Leptospira biflexa）是钩端螺旋体病的病原体，可引起流感样疾病、脑膜炎和肺出血伴呼吸衰竭等。"],
                    [""],
                    ["BA125VS", "双曲钩端螺旋体抗原", "Leptospira biflexa Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 细粒棘球绦虫（1）
                [
                    ["细粒棘球绦虫（Echinococcus granulosus）是囊型包虫病的病原体，可引起宿主体内压迫并发症、感染并发症和继发性门静脉高压症等。"],
                    [""],
                    ["BA107VS", "细粒棘球绦虫抗原", "Echinococcus granulosus Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 森林脑炎病毒（2）
                [
                    ["森林脑炎病毒（Tick-borne encephalitis Virus，TBEV）是森林脑炎（又名蜱传脑炎）的病原体，是经蜱传播，可引起以中枢神经系统病变为特征的急性传染病。"],
                    [""],
                    ["BA112VS ", "森林脑炎病毒抗原（优质）", "Tick-borne encephalitis (TBE) Virus Antigen - Premium", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA112VSL", "森林脑炎病毒抗原", "Tick-borne encephalitis (TBE) Virus Antigen", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ],
                // 基孔肯雅病毒（3）
                [
                    ["基孔肯雅病毒（Chikungunya virus）是基孔肯雅热的病原体，可引起发热、皮疹和关节疼痛等症状。"],
                    [""],
                    [" BA148R2", "基孔肯雅病毒糖蛋白E1", "Chikungunya Glycoprotein E1", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA148R3 ", "基孔肯雅病毒（(A226V突变体）糖蛋白E1", "Chikungunya Glycoprotein E1 (A226V)", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"],
                    ["BA148R1", "基孔肯雅病毒糖蛋白E2", "Chikungunya Glycoprotein E3", "德国virion\\serion", "重组蛋白", "包被；标记", "≤-65℃，≥10年", "1mg;5mg;10mg"]
                ]
            ],
            // 1 人源化单抗
            [
                // 1, 0 抗巨细胞病毒
                [
                    ["巨细胞病毒（Cytomegalovirus）是一种疱疹病毒组的DNA病毒，可引起以生殖泌尿系统、中枢神经系统和肝脏疾患为主的各系统感染。"],
                    ["·安全性：实验操作时应严格按照实验室生物、化学安全规定进行。<br />" +
                    "·用途：本产品仅供于科研或体外诊断用，不能用于人体实验或治疗。"],
                    ["MAB109.001", "抗巨细胞病毒单抗", "Anti-Cytomegalovirus (CMV) IgM", "人源化单抗，IgM型", "制备质控品；作为免疫诊断的包被原/标记原。", "1mL，5mL，10mL，50mL"],
                    ["MAB109.002", "抗巨细胞病毒单抗", "Anti-Cytomegalovirus (CMV) IgM", "人源化单抗，IgM型", "制备质控品；作为免疫诊断的包被原/标记原。", "1mL，5mL，10mL，50mL"]
                ],
                // 抗弓形虫（1）
                [
                    ["弓形虫（Toxoplasma gondii）是弓形虫病的病原体，可引发先天性弓形虫病导致自然流产、新生儿严重感染等。"],
                    [""],
                    ["MAB110.001", "抗弓形虫单抗", "Anti-Toxoplasma gondii IgM", "人源化单抗，IgM", "制备质控品；作为免疫诊断的包被原/标记原。", "1mL，5mL，10mL，50mL"]
                ],
                // 抗单纯疱疹病毒（1）
                [
                    ["单纯疱疹病毒属于人类疱疹病毒，其中1型病毒可引起发热、脑炎、皮肤疱疹性湿疹，2型病毒属于人类疱疹病毒，可引起生殖器疱疹、生殖器外损伤和无菌性脑膜炎。"],
                    [""],
                    ["MAB105.001", "抗单纯疱疹病毒1+2型单抗", "Anti-Herpes Simplex Virus 1/2 (HSV-1/2) IgM", "人源化单抗，IgM", "制备质控品；作为免疫诊断的包被原/标记原。", "1mL，5mL，10mL，50mL"]
                ],
                // 抗水痘带状疱疹病毒（2）
                [
                    ["水痘带状疱疹病毒（Varicella Zoster Virus ，VZV）是带状疱疹的病原体，引起急性炎症性皮肤病，可导致并发性肺炎、胎儿畸形和流产等。"],
                    [""],
                    ["MAB104.001", "抗水痘带状疱疹病毒单抗", "Anti-Varicella Zoster Virus (VZV) IgM", "人源化单抗，IgM", "制备质控品；作为免疫诊断的包被原/标记原。", "1mL，5mL，10mL，50mL"],
                    ["MAB104.002", "抗水痘带状疱疹病毒单抗", "Anti-Varicella Zoster Virus (VZV) IgM", "人源化单抗，IgM", "制备质控品；作为免疫诊断的包被原/标记原。", "1mL，5mL，10mL，50mL"]
                ],
                // 抗风疹病毒（2）
                [
                    ["风疹病毒（Rubella Virus）是风疹的病原体，可引起淋巴结肿大和先天性疾病。"],
                    [""],
                    ["MAB129.001", "抗风疹病毒单抗", "Anti-Rubella Virus IgM", "人源化单抗，IgM", "制备质控品；作为免疫诊断的包被原/标记原。", "1mL，5mL，10mL，50mL"],
                    ["MAB129.002", "抗风疹病毒单抗", "Anti-Rubella Virus IgM", "人源化单抗，IgM", "制备质控品；作为免疫诊断的包被原/标记原。", "1mL，5mL，10mL，50mL"]
                ],
                // 抗麻疹病毒（1）
                [
                    ["麻疹病毒（Measles Virus）是麻疹的病原体，可引起发热、肺炎、脑炎等症状，是儿童最常见的急性传染病。"],
                    [""],
                    ["MAB102.001", "抗麻疹病毒单抗", "Anti-Measles Virus IgM", "人源化单抗，IgM", "制备质控品；作为免疫诊断的包被原/标记原。", "1mL，5mL，10mL，50mL"]
                ],
                // 抗腮腺炎病毒（2）
                [
                    ["腮腺炎病毒（Mumps Virus）是流行性腮腺炎的病原体，可引起发热、生殖系统并发症和神经系统并发症等。"],
                    [""],
                    ["MAB103.001", "抗流行性腮腺炎单抗", "Anti-Mumps Virus IgM", "人源化单抗，IgM", "制备质控品；作为免疫诊断的包被原/标记原。", "1mL，5mL，10mL，50mL"],
                    ["MAB103.002", "抗流行性腮腺炎单抗", "", "人源化单抗，IgM", "制备质控品；作为免疫诊断的包被原/标记原。", "1mL，5mL，10mL，50mL"]
                ],
                // 抗EB病毒（1）
                [
                    ["EB病毒（Epstein-Barr virus）属于人类疱疹病毒，可引起单核细胞增多、腺热等症状。"],
                    [""],
                    ["MAB1361.001", "抗EB病毒 VCA P18单抗", "Anti-Epstein-Barr Virus (EBV) VCA P18 IgM", "人源化单抗，IgM", "制备质控品；作为免疫诊断的包被原/标记原。", "1mL，5mL，10mL，50mL"]
                ],
                // 抗肺炎衣原体（1）
                [
                    ["肺炎衣原体（Chlamydia pneumoniae）是肺炎的病原体，主要引起呼吸道和肺部感染。"],
                    [""],
                    ["MAB1371.001", "抗肺炎衣原体单抗", "Anti-Chlamydia pneumoniae IgM", "人源化单抗，IgM", "制备质控品；作为免疫诊断的包被原/标记原。", "1mL，5mL，10mL，50mL"]
                ],
                // 抗肺炎支原体（1）
                [
                    ["肺炎支原体（Mycoplasma pneumoniae）是原发性非典型肺炎的病原体，可引起头痛、咳嗽等一般的呼吸道症状。"],
                    [""],
                    ["MAB127.001", "抗肺炎支原体单抗", "Anti-Mycoplasma pneumoniae IgM", "人源化单抗，IgM", "制备质控品；作为免疫诊断的包被原/标记原。", "1mL，5mL，10mL，50mL"]
                ],
                // 抗寨卡病毒（1）
                [
                    ["寨卡病毒（Zika virus）是一种通过蚊虫进行传播的虫媒病毒。人被感染后的常见征状包括发烧、关节疼痛、头痛和结膜炎等。"],
                    [""],
                    ["MAB149.001", "抗寨卡病毒单抗", "Anti-Zika Virus IgM", "人源化单抗，IgM", "制备质控品；作为免疫诊断的包被原/标记原。", "1mL，5mL，10mL，50mL"]
                ],
                // 抗登革热病毒（1）
                [
                    ["登革热是登革热病毒引起、依蚊传播的一种急性传染病。临床特征为起病急骤，高热，全身肌肉、骨髓及关节痛，极度疲乏，部分患可有皮疹、出血倾向和淋巴结肿大。"],
                    [""],
                    ["MAB114.001", "抗登革热单抗", "Anti-Dengue Virus IgM", "人源化单抗，IgM", "制备质控品；作为免疫诊断的包被原/标记原。", "1mL，5mL，10mL，50mL"]
                ]
            ],
            // 2原辅料
            [
                // 微球
                [],
                // 牛血清白蛋白
                [],
                // 类风湿因子吸附剂
                []
            ]
        ]
    }
})
// 判断是否通过搜索进入产品页面
var url = window.location.href
// decodeURI解决中文乱码问题
var searchUrl = decodeURI( url.split("?keyword=")[1] )
var searchWord = searchUrl.split("&range=")[0]
var range = searchUrl.split("&range=")[1]
// 检索与搜索字段匹配的Nav
if(searchUrl!= undefined) {
    if (searchWord != "") {
        var i = 0
        var len = vm._data.Nav1.length - 1
        if(range != "all"){
            i = range - 1
            len = range - 1
        }
        for (; i <= len; i++) {
            console.log(vm._data.Nav1[i])
            // 展示第一个标题
            if (vm._data.Nav1[i].indexOf(searchWord) != -1) {
                refreshNav1(i)
            }
            for (var j = 0; j < vm._data.Nav2[i].length; j++) {
                console.log(vm._data.Nav2[i][j])
                // 展示第二个标题
                if (vm._data.Nav2[i][j].indexOf(searchWord) != -1) {
                    refreshNav2(i, j)
                }
                if(vm._data.Nav3[i][j] != undefined) {
                    for (var k = 0; k < vm._data.Nav3[i][j].length; k++) {
                        // 展示第三个标题
                        if (vm._data.Nav3[i][j][k].indexOf(searchWord) != -1) {
                            refreshNav3(i, j, k)
                        }
                    }
                }
            }
        }
    }
}
// 页面初始化时，左侧nav展开的条例
var productsNav = JSON.parse(localStorage.getItem("products"))
// 清空products在localStorage上的缓存
localStorage.setItem("products", null);
if(productsNav != undefined){
    var navLength = productsNav.length
    switch (navLength) {
        case(3):
            refreshNav3(productsNav[0], productsNav[1], productsNav[2])
            break;
        case(2):
            refreshNav2(productsNav[0], productsNav[1])
            break;
        case(1):
            refreshNav1(productsNav[0])
            break;
        default:
            break;
    }
}
function refreshNav1(a) {
    $first = $(".layui-nav-item").eq(a)
    $first.addClass("layui-nav-itemed")
}
function refreshNav2(a, b) {
    $first = $(".layui-nav-item").eq(a)
    $first.addClass("layui-nav-itemed")
    $second = $first.children(".layui-nav-child").eq(b)
    if( $second.children().length > 1)
        $second.addClass("layui-nav-itemed")
    else
        $second.addClass("layui-this")
    $second.trigger("click")
}
function refreshNav3(a, b, c) {
}
