// VM层
var vm = new Vue({
    el: "#products",

    methods: {
        showContent2(i, j){

            console.log(i)
            this.currentIndex = [i, j, false]
            this.currentPageTitle = this.Nav2[i][j].split("（")[0]
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
        content_title: ["抗原", "人源化单抗", "质控品", "酶联免疫试剂盒", "原辅料"],
        // Nav的所有字段
        Nav1: ['抗原（63）', "人源化单抗（16）", "质控品", "酶联免疫试剂盒", "原辅料"],
        Nav2: [
            ["巨细胞病毒（1）", "弓形虫（1）", "风疹病毒（1）", "单纯疱疹病毒（1型）（2）", "单纯疱疹病毒（2型）（2）", "肺炎支原体（2）", "肺炎衣原体（2）", "呼吸道合胞病毒（1）", "人腺病毒（1）", "副流感病毒（3）", "嗜肺军团菌（1）", "百日咳杆菌（3）", "腮腺炎病毒（1）", "柯萨奇病毒（1）", "埃可病毒（1）", "肠道病毒（1）", "细小病毒B19（8）", "EB病毒（5）", "白色念珠菌（1）", "幽门螺旋杆菌（1）", "麻疹病毒（2）", "轮状病毒（1）", "水痘-带状疱疹病毒（2）", "流产嗜性衣原体（1）", "沙眼衣原体（2）", "耶尔森氏菌（3）", "空肠弯曲杆菌（1）", "布鲁氏杆菌（1）", "伯氏疏螺旋体（4）", "双曲钩端螺旋体（1）", "细粒棘球绦虫（1）", "森林脑炎病毒（2）", "基孔肯雅病毒（3）"],
            ["抗巨细胞病毒（2）", "抗弓形虫（1）", "抗单纯疱疹病毒（1）", "抗水痘带状疱疹病毒（2）", "抗风疹病毒（2）", "抗麻疹病毒（1）", "抗腮腺炎病毒（2）", "抗EB病毒（1）", "抗肺炎衣原体（1）", "抗肺炎支原体（1）", "抗寨卡病毒（1）", "抗登革热病毒（1）"],
            ["免疫效果监测系列（13）", " TORCH系列（13）", " 儿童疾病系列（47）", " 皮肤性病系列（7）", " 疱疹病毒系列（10）", " 呼吸道疾病系列（34）", " 胃肠道疾病系列（15）", "鼻咽癌相关病毒系列（4）", " 人畜共患系列（17）", " 虫媒传染系列（2）", " 衣原体感染系列（6）", "真菌感染系列（7）"],
            ["免疫效果监测系列（8）", " TORCH系列（13）", " 儿童疾病系列（54）", " 皮肤性病系列（5）", " 疱疹病毒系列（12）", " 呼吸道疾病系列（38）", " 胃肠道疾病系列（15）", " 鼻咽癌相关病毒系列（6）", " 人畜共患系列（20）", " 虫媒传染系列（6）", " 衣原体感染系列（6）", " 真菌感染系列（7）", " IgG抗体亲和力检测系列"],
            ["牛血清白蛋白", "类风湿因子吸附剂"]
        ],
        Nav3: [
            // 抗原
            [],
            // 人源化单抗
            [],
            // 质控品
            [
                // 免疫效果监测系列（13）
                ["百日咳杆菌（4）", "白喉杆菌（1）", "麻疹病毒（2）", "腮腺炎（2）", "风疹病毒（2）", "破伤风杆菌（1）", "水痘-带状疱疹病毒（1）"],
                // TORCH系列（13）
                ["弓形虫（2）", "风疹病毒（2）", "巨细胞病毒（2）", "单纯疱疹病毒（7）"],
                // 儿童疾病系列（47）
                ["百日咳杆菌（4）", "白喉杆菌（1）", "破伤风杆菌（1）", "麻疹病毒（2）", "风疹病毒（2）", "腮腺炎病毒（2）", "细小病毒B19（2）", "水痘-带状疱疹病毒（1）", "流感病毒（6）", "EB病毒（4）", "呼吸道合胞病毒（2）", "柯萨奇病毒（3）", "埃可病毒（3）", "肠道病毒（1）", "副流感病毒（2）", "肺炎衣原体（3）", "肺炎支原体（3）", "腺病毒（2）", "空肠弯曲杆菌（3）"],
                // 皮肤性病系列（7）
                ["单纯疱疹病毒（7）"],
                // 疱疹病毒系列（10）
                ["单纯疱疹病毒1型（2）", "单纯疱疹病毒2型（2）", "单纯疱疹病毒1+2型（3）", "水痘-带状疱疹病毒（1）", "巨细胞病毒（2）"],
                // 呼吸道疾病系列（34）
                ["呼吸道合胞病毒（2）", "肺炎衣原体（3）", "肺炎支原体（3）", "腺病毒（2）", "嗜肺军团菌（1）", "流感病毒（6）", "柯萨奇病毒（3）", "埃可病毒（3）", "百日咳杆菌（4）", "肠道病毒（3）", "Q热立克次氏体（2）", "副流感病毒（2）"],
                // 胃肠道疾病系列（15）
                ["空肠弯曲杆菌（3）", "柯萨奇病毒（3）", "埃可病毒（3）", "肠道病毒（3）", "幽门螺旋杆菌（3）"],
                // 鼻咽癌相关病毒系列（4）
                ["EB病毒（4）"],
                // 人畜共患系列（17）
                ["伯氏疏螺旋体（2）", "布鲁氏杆菌（3）", "空肠弯曲杆菌（3）", "Q热立克次氏体（2）", "棘球绦虫（1）", "蜱传脑炎病毒（2）", "钩端螺旋体（2）", "弓形虫（2）"],
                // 虫媒传染系列（2）
                ["蜱传脑炎病毒（2）"],
                // 衣原体感染系列（6）
                ["肺炎衣原体（3）", "沙眼衣原体（3）"],
                // 真菌感染系列（7）
                ["烟曲霉菌（3）", "白色念珠菌（4）"]
            ],
            // + 酶联免疫试剂盒
            [
                // + 免疫效果监测系列（8）
                ["百日咳杆菌（2）", "白喉杆菌（1）", "麻疹病毒（1）", "腮腺炎病毒（1）", "风疹病毒（1）", "破伤风杆菌（1）", "水痘-带状疱疹病毒（1）"],
                //   + TORCH系列（13）
                ["弓形虫（2）", "风疹病毒（2）", "巨细胞病毒（2）", "单纯疱疹病毒（7）"],
                //   + 儿童疾病系列（56）
                ["百日咳杆菌（5）", "白喉杆菌（1）", "破伤风杆菌（1）", "麻疹病毒（2）", "风疹病毒（2）", "腮腺炎病毒（2）", "细小病毒B19（2）", "水痘-带状疱疹病毒（3）", "流感病毒（6）", "EB病毒（6）", "呼吸道合胞病毒（3）", "柯萨奇病毒（3）", "埃可病毒（3）", "肠道病毒（3）", "副流感病毒（2）", "肺炎衣原体（3）", "肺炎支原体（3）", "腺病毒（3）", "空肠弯曲杆菌（3）"],
                //   + 皮肤性病系列（5）
                ["单纯疱疹病毒（5）"],
                //   + 疱疹病毒系列（12）
                ["单纯疱疹病毒1型（2）", "单纯疱疹病毒2型（2）", "单纯疱疹病毒1+2型（3）", "水痘-带状疱疹病毒（3）", "巨细胞病毒（2）"],
                //   + 呼吸道疾病系列（39）
                ["呼吸道合胞病毒（3）", "肺炎衣原体（3）", "肺炎支原体（3）", "腺病毒（3）", "嗜肺军团菌（2）", "流感病毒（6）", "柯萨奇病毒（3）", "埃可病毒（3）", "百日咳杆菌（5）", "肠道病毒（3）", "Q热立克次氏体（3）", "副流感病毒（2）"],
                //   + 胃肠道疾病系列（15）
                ["空肠弯曲杆菌（3）", "柯萨奇病毒（3）", "埃可病毒（3）", "肠道病毒（3）", "幽门螺旋杆菌（3）"],
                //   + 鼻咽癌相关病毒系列（6）
                ["EB病毒（6）"],
                //   + 人畜共患系列（20）
                ["伯氏疏螺旋体（2）", "布鲁氏杆菌（3）", "空肠弯曲杆菌（3）", "Q热立克次氏体（3）", "棘球绦虫（1）", "土拉热弗朗西丝氏菌（2）", "蜱传脑炎病毒（2）", "钩端螺旋体（1）", "弓形虫（2）", "利什曼原虫（1）"],
                //   + 虫媒传染系列（6）
                ["土拉热弗朗西丝氏菌（2）", "蜱传脑炎病毒（2）", "登革热病毒（2）"],
                //   + 衣原体感染系列（6）
                ["肺炎衣原体（3）", "沙眼衣原体（3）"],
                //   + 真菌感染系列（7）
                ["烟曲霉菌（3）", "白色念珠菌（4）"],
                //   + IgG抗体亲和力检测系列
            ],
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
            // 2 质控品
            [

                // 免疫效果监测系列（5）
                [
                    [""],
                    ["·安全性：实验操作时应严格按照实验室生物、化学安全规定进行。<br />" +
                    "·用途：本产品仅供于科研或体外诊断用，不能用于人体实验或治疗。"],
                    ["BC102G", "麻疹病毒 IgG抗体检测质控品", "Measles Virus IgG cont.", "液体即用型", "3 mL/支"],
                    ["BC102M", "麻疹病毒 IgM抗体检测质控品", "Measles Virus IgM cont.", "液体即用型", "3 mL/支"],
                    ["BC103G", "腮腺炎病毒 IgG抗体检测质控品", "Mumps Virus IgG cont.", "液体即用型", "3 mL/支"],
                    ["BC103M", "腮腺炎病毒 IgM抗体检测质控品", "Mumps Virus IgM cont.", "液体即用型", "3 mL/支"],
                    ["BC104A", "水痘-带状疱疹病毒 IgA质控品", "Varicella-Zoster Virus IgA control", "液体即用型", "3 mL/支"],
                    ["BC108G", "破伤风杆菌 IgG抗体检测质控品", "Tetanus IgG control", "液体即用型", "3 mL/支"],
                    ["BC1201A", "百日咳杆菌毒素 IgA质控品", "Bordetella pertussis Toxin IgA  control", "液体即用型", "3 mL/支"],
                    ["BC1201G", "百日咳杆菌毒素 IgG质控品", "Bordetella pertussis Toxin IgG  control", "液体即用型", "3 mL/支"],
                    ["BC120A", "百日咳杆菌 IgA质控品", "Bordetella pertussis IgA  control", "液体即用型", "3 mL/支"],
                    ["BC120G", "百日咳杆菌 IgG质控品", "Bordetella pertussis IgG  control", "液体即用型", "3 mL/支"],
                    ["BC129G", "风疹病毒 IgG抗体检测质控品", "Rubella Virus IgG cont.", "液体即用型", "3 mL/支"],
                    ["BC129M", "风疹病毒 IgM抗体检测质控品", "Rubella Virus IgM cont.", "液体即用型", "3 mL/支"],
                    ["BC130G", "白喉杆菌 IgG抗体检测质控品", "Diphtherie IgG control", "液体即用型", "3 mL/支"]

                ],
                // TORCH系列（14）
                [
                    [""],
                    [""],
                    ["BC1051G", "单纯疱疹病毒1 IgG抗体检测质控品", "Herpes Simplex Virus 1  IgG cont.", "液体即用型", "3 mL/支"],
                    ["BC1051M", "单纯疱疹病毒1 IgM抗体检测质控品", "Herpes Simplex Virus 1  IgM cont.", "液体即用型", "3 mL/支"],
                    ["BC1052G", "单纯疱疹病毒2 IgG抗体检测质控品", "Herpes Simplex Virus 2  IgG cont.", "液体即用型", "3 mL/支"],
                    ["BC1052M", "单纯疱疹病毒2 IgM抗体检测质控品", "Herpes Simplex Virus 2  IgM cont.", "液体即用型", "3 mL/支"],
                    ["BC105A", "单纯疱疹病毒1+2型IgA质控品", "Herpes Simplex Virus 1+2 IgA", "液体即用型", "3 mL/支"],
                    ["BC105G", "单纯疱疹病毒1+2型IgG抗体检测质控品", "Herpes Simplex Virus 1+2 IgG cont.", "液体即用型", "3 mL/支"],
                    ["BC105M", "单纯疱疹病毒1+2型IgM抗体检测质控品", "Herpes Simplex Virus 1+2 IgM cont.", "液体即用型", "3 mL/支"],
                    ["BC109G", "巨细胞 IgG抗体检测质控品", "Cytomegalovirus IgG cont.", "液体即用型", "3 mL/支"],
                    ["BC109M", "巨细胞 IgM抗体检测质控品", "Cytomegalovirus IgM cont.", "液体即用型", "3 mL/支"],
                    ["BC110G", "刚地弓形虫 IgG抗体检测质控品", "Toxoplasma gondii  IgG cont.", "液体即用型", "3 mL/支"],
                    ["BC110M", "刚地弓形虫 IgM抗体检测质控品", "Toxoplasma gondii  IgM cont.", "液体即用型", "3 mL/支"],
                    ["BC129G", "风疹病毒 IgG抗体检测质控品", "Rubella Virus IgG cont.", "液体即用型", "3 mL/支"],
                    ["BC129M", "风疹病毒 IgM抗体检测质控品", "Rubella Virus IgM cont.", "液体即用型", "3 mL/支"]
                ],
                // 儿童疾病系列
                [
                    [""],
                    [""],
                    ["BC102G", "麻疹病毒 IgG抗体检测质控品", "Measles Virus IgG cont.", "液体即用型", "3 mL/支"],
                    ["BC102M", "麻疹病毒 IgM抗体检测质控品", "Measles Virus IgM cont.", "液体即用型", "3 mL/支"],
                    ["BC103G", "腮腺炎病毒 IgG抗体检测质控品", "Mumps Virus IgG cont.", "液体即用型", "3 mL/支"],
                    ["BC103M", "腮腺炎病毒 IgM抗体检测质控品", "Mumps Virus IgM cont.", "液体即用型", "3 mL/支"],
                    ["BC104A", "水痘-带状疱疹病毒 IgA质控品", "Varicella-Zoster Virus IgA control", "液体即用型", "3 mL/支"],
                    ["BC108G", "破伤风杆菌 IgG抗体检测质控品", "Tetanus IgG control", "液体即用型", "3 mL/支"],
                    ["BC113A", "呼吸道合胞病毒 IgA抗体检测质控品", "Resp. Syncytial Virus IgA cont.", "液体即用型", "3 mL/支"],
                    ["BC113G", "呼吸道合胞病毒IgG抗体检测质控品", "Respiratory Syncytial Virus IgG control", "液体即用型", "3 mL/支"],
                    ["BC1201A", "百日咳杆菌毒素 IgA质控品", "Bordetella pertussis Toxin IgA  control", "液体即用型", "3 mL/支"],
                    ["BC1201G", "百日咳杆菌毒素 IgG质控品", "Bordetella pertussis Toxin IgG  control", "液体即用型", "3 mL/支"],
                    ["BC120A", "百日咳杆菌 IgA质控品", "Bordetella pertussis IgA  control", "液体即用型", "3 mL/支"],
                    ["BC120G", "百日咳杆菌 IgG质控品", "Bordetella pertussis IgG  control", "液体即用型", "3 mL/支"],
                    ["BC122G", "细小病毒B19IgG质控品", "PARVOVIRUS B19 IgG", "液体即用型", "3 mL/支"],
                    ["BC122M", "细小病毒B19IgM质控品", "PARVOVIRUS B19 IgM", "液体即用型", "3 mL/支"],
                    ["BC1231A", "流感病毒A IgA抗体检测质控品", "Influenza A Virus IgA cont.", "液体即用型", "3 mL/支"],
                    ["BC1231G", "流感病毒A IgG质控品", "INFLUENZA A VIRUS IgG", "液体即用型", "3 mL/支"],
                    ["BC1231M", "流感病毒A IgM质控品", "INFLUENZA A VIRUS IgM", "液体即用型", "3 mL/支"],
                    ["BC1232A", "流感病毒B IgA质控品", "INFLUENZA B VIRUS IgA", "液体即用型", "3 mL/支"],
                    ["BC1232G", "流感病毒B IgG质控品", "INFLUENZA B VIRUS IgG", "液体即用型", "3 mL/支"],
                    ["BC1232M", "流感病毒B IgM质控品", "INFLUENZA B VIRUS IgM", "液体即用型", "3 mL/支"],
                    ["BC126A", "副流感病毒IgA质控品", "PARAINFLUENZA IgA", "液体即用型", "3 mL/支"],
                    ["BC126G", "副流感病毒IgG质控品", "PARAINFLUENZA IgG", "液体即用型", "3 mL/支"],
                    ["BC127A", "肺炎支原体 IgA抗体检测质控品", "Mycoplasma pneumoniae IgA control", "液体即用型", "3 mL/支"],
                    ["BC127G", "肺炎支原体 IgG抗体检测质控品", "Mycoplasma pneumoniae IgG control", "液体即用型", "3 mL/支"],
                    ["BC127M", "肺炎支原体 IgM抗体检测质控品", "Mycoplasma pneumoniae IgM control", "液体即用型", "3 mL/支"],
                    ["BC128A", "腺病毒 IgA抗体检测质控品", "Adenovirus IgA cont.", "液体即用型", "3 mL/支"],
                    ["BC128G", "腺病毒 IgG抗体检测质控品", "Adenovirus IgG control", "液体即用型", "3 mL/支"],
                    ["BC129G", "风疹病毒 IgG抗体检测质控品", "Rubella Virus IgG cont.", "液体即用型", "3 mL/支"],
                    ["BC129M", "风疹病毒 IgM抗体检测质控品", "Rubella Virus IgM cont.", "液体即用型", "3 mL/支"],
                    ["BC130G", "白喉杆菌 IgG抗体检测质控品", "Diphtherie IgG control", "液体即用型", "3 mL/支"],
                    ["BC133A", "肠道病毒IgA质控品", "ENTEROVIRUS IgA", "液体即用型", "3 mL/支"],
                    ["BC134A", "柯萨奇病毒IgA质控品", "COCKSACKIE IgA", "液体即用型", "3 mL/支"],
                    ["BC134G", "柯萨奇病毒IgG质控品", "COCKSACKIE IgG", "液体即用型", "3 mL/支"],
                    ["BC134M", "柯萨奇病毒 IgM抗体检测质控品", "Cocksackie IgM cont.", "液体即用型", "3 mL/支"],
                    ["BC135A", "埃可病毒IgA质控品", "ECHOVIRUS IgA", "液体即用型", "3 mL/支"],
                    ["BC135G", "埃可病毒IgG质控品", "ECHOVIRUS IgG", "液体即用型", "3 mL/支"],
                    ["BC135M", "埃可病毒 IgM抗体检测质控品", "Echovirus IgM cont.", "液体即用型", "3 mL/支"],
                    ["BC1361G", "EB病毒VCA IgG质控品", "EPSTEIN-BARR VIRUS VCAIgG", "液体即用型", "3 mL/支"],
                    ["BC1361M", "EB病毒VCA IgM质控品", "EPSTEIN-BARR VIRUS VCAIgM", "液体即用型", "3 mL/支"],
                    ["BC1362G", "EB病毒NA-1 IgG质控品", "EPSTEIN-BARR VIRUS EBNA1IgG", "液体即用型", "3 mL/支"],
                    ["BC1363G", "EB病毒早期蛋白IgG质控品", "EPSTEIN-BARR VIRUS EAIgG", "液体即用型", "3 mL/支"],
                    ["BC1371A", "肺炎衣原体IgA质控品", "CHLAMYDIA PNEUMONIAE IgA", "液体即用型", "3 mL/支"],
                    ["BC1371G", "肺炎衣原体IgG质控品", "CHLAMYDIA PNEUMONIAE IgG", "液体即用型", "3 mL/支"],
                    ["BC1371M", "肺炎衣原体IgM质控品", "CHLAMYDIA PNEUMONIAE IgM", "液体即用型", "3 mL/支"],
                    ["BC139A", "空肠弯曲杆菌IgA质控品", "CAMPYLOBACTER JEJUNI IgA", "液体即用型", "3 mL/支"],
                    ["BC139G", "空肠弯曲杆菌IgG质控品", "CAMPYLOBACTER JEJUNI IgG", "液体即用型", "3 mL/支"],
                    ["BC139M", "空肠弯曲杆菌IgM质控品", "CAMPYLOBACTER JEJUNI IgM", "液体即用型", "3 mL/支"]
                ],
                // 皮肤性病系列
                [
                    [""],
                    [""],
                    ["BC1051G", "单纯疱疹病毒1 IgG抗体检测质控品", "Herpes Simplex Virus 1  IgG cont.", "液体即用型", "3 mL/支"],
                    ["BC1051M", "单纯疱疹病毒1 IgM抗体检测质控品", "Herpes Simplex Virus 1  IgM cont.", "液体即用型", "3 mL/支"],
                    ["BC1052G", "单纯疱疹病毒2 IgG抗体检测质控品", "Herpes Simplex Virus 2  IgG cont.", "液体即用型", "3 mL/支"],
                    ["BC1052M", "单纯疱疹病毒2 IgM抗体检测质控品", "Herpes Simplex Virus 2  IgM cont.", "液体即用型", "3 mL/支"],
                    ["BC105A", "单纯疱疹病毒1+2型IgA质控品", "Herpes Simplex Virus 1+2 IgA", "液体即用型", "3 mL/支"],
                    ["BC105G", "单纯疱疹病毒1+2型IgG抗体检测质控品", "Herpes Simplex Virus 1+2 IgG cont.", "液体即用型", "3 mL/支"],
                    ["BC105M", "单纯疱疹病毒1+2型IgM抗体检测质控品", "Herpes Simplex Virus 1+2 IgM cont.", "液体即用型", "3 mL/支"]
                ],
                // 疱疹病毒系列
                [
                    [""],
                    [""],
                    ["BC104A", "水痘-带状疱疹病毒 IgA质控品", "Varicella-Zoster Virus IgA control", "液体即用型", "3 mL/支"],
                    ["BC1051G", "单纯疱疹病毒1 IgG抗体检测质控品", "Herpes Simplex Virus 1  IgG cont.", "液体即用型", "3 mL/支"],
                    ["BC1051M", "单纯疱疹病毒1 IgM抗体检测质控品", "Herpes Simplex Virus 1  IgM cont.", "液体即用型", "3 mL/支"],
                    ["BC1052G", "单纯疱疹病毒2 IgG抗体检测质控品", "Herpes Simplex Virus 2  IgG cont.", "液体即用型", "3 mL/支"],
                    ["BC1052M", "单纯疱疹病毒2 IgM抗体检测质控品", "Herpes Simplex Virus 2  IgM cont.", "液体即用型", "3 mL/支"],
                    ["BC105A", "单纯疱疹病毒1+2型IgA质控品", "Herpes Simplex Virus 1+2 IgA", "液体即用型", "3 mL/支"],
                    ["BC105G", "单纯疱疹病毒1+2型IgG抗体检测质控品", "Herpes Simplex Virus 1+2 IgG cont.", "液体即用型", "3 mL/支"],
                    ["BC105M", "单纯疱疹病毒1+2型IgM抗体检测质控品", "Herpes Simplex Virus 1+2 IgM cont.", "液体即用型", "3 mL/支"],
                    ["BC109G", "巨细胞 IgG抗体检测质控品", "Cytomegalovirus IgG cont.", "液体即用型", "3 mL/支"],
                    ["BC109M", "巨细胞 IgM抗体检测质控品", "Cytomegalovirus IgM cont.", "液体即用型", "3 mL/支"]
                ],
                // 呼吸道疾病系列
                [
                    [""],
                    [""],
                    ["BC106G", "嗜肺军团菌1-7 IgG抗体检测质控品", "Legionella pneumophila 1-7 IgG control", "液体即用型", "3 mL/支"],
                    ["BC113A", "呼吸道合胞病毒 IgA抗体检测质控品", "Resp. Syncytial Virus IgA cont.", "液体即用型", "3 mL/支"],
                    ["BC113G", "呼吸道合胞病毒IgG抗体检测质控品", "Respiratory Syncytial Virus IgG control", "液体即用型", "3 mL/支"],
                    ["BC1201A", "百日咳杆菌毒素 IgA质控品", "Bordetella pertussis Toxin IgA  control", "液体即用型", "3 mL/支"],
                    ["BC1201G", "百日咳杆菌毒素 IgG质控品", "Bordetella pertussis Toxin IgG  control", "液体即用型", "3 mL/支"],
                    ["BC120A", "百日咳杆菌 IgA质控品", "Bordetella pertussis IgA  control", "液体即用型", "3 mL/支"],
                    ["BC120G", "百日咳杆菌 IgG质控品", "Bordetella pertussis IgG  control", "液体即用型", "3 mL/支"],
                    ["BC1231A", "流感病毒A IgA抗体检测质控品", "Influenza A Virus IgA cont.", "液体即用型", "3 mL/支"],
                    ["BC1231G", "流感病毒A IgG质控品", "INFLUENZA A VIRUS IgG", "液体即用型", "3 mL/支"],
                    ["BC1231M", "流感病毒A IgM质控品", "INFLUENZA A VIRUS IgM", "液体即用型", "3 mL/支"],
                    ["BC1232A", "流感病毒B IgA质控品", "INFLUENZA B VIRUS IgA", "液体即用型", "3 mL/支"],
                    ["BC1232G", "流感病毒B IgG质控品", "INFLUENZA B VIRUS IgG", "液体即用型", "3 mL/支"],
                    ["BC1232M", "流感病毒B IgM质控品", "INFLUENZA B VIRUS IgM", "液体即用型", "3 mL/支"],
                    ["BC126A", "副流感病毒IgA质控品", "PARAINFLUENZA IgA", "液体即用型", "3 mL/支"],
                    ["BC126G", "副流感病毒IgG质控品", "PARAINFLUENZA IgG", "液体即用型", "3 mL/支"],
                    ["BC127A", "肺炎支原体 IgA抗体检测质控品", "Mycoplasma pneumoniae IgA control", "液体即用型", "3 mL/支"],
                    ["BC127G", "肺炎支原体 IgG抗体检测质控品", "Mycoplasma pneumoniae IgG control", "液体即用型", "3 mL/支"],
                    ["BC127M", "肺炎支原体 IgM抗体检测质控品", "Mycoplasma pneumoniae IgM control", "液体即用型", "3 mL/支"],
                    ["BC128A", "腺病毒 IgA抗体检测质控品", "Adenovirus IgA cont.", "液体即用型", "3 mL/支"],
                    ["BC128G", "腺病毒 IgG抗体检测质控品", "Adenovirus IgG control", "液体即用型", "3 mL/支"],
                    ["BC1312G", "Q热柯克斯体2相IgG质控品", "COXIELLA BURNETII PHASE2 (Q-Fieber) IgG", "液体即用型", "3 mL/支"],
                    ["BC1312M", "Q热柯克斯体2相IgM质控品", "COXIELLA BURNETII PHASE2 (Q-Fieber) IgM", "液体即用型", "3 mL/支"],
                    ["BC133A", "肠道病毒IgA质控品", "ENTEROVIRUS IgA", "液体即用型", "3 mL/支"],
                    ["BC133G", "肠道病毒IgG质控品", "ENTEROVIRUS IgG", "液体即用型", "3 mL/支"],
                    ["BC133M", "肠道病毒IgM质控品", "ENTEROVIRUS IgM", "液体即用型", "3 mL/支"],
                    ["BC134A", "柯萨奇病毒IgA质控品", "COCKSACKIE IgA", "液体即用型", "3 mL/支"],
                    ["BC134G", "柯萨奇病毒IgG质控品", "COCKSACKIE IgG", "液体即用型", "3 mL/支"],
                    ["BC134M", "柯萨奇病毒 IgM抗体检测质控品", "Cocksackie IgM cont.", "液体即用型", "3 mL/支"],
                    ["BC135A", "埃可病毒IgA质控品", "ECHOVIRUS IgA", "液体即用型", "3 mL/支"],
                    ["BC135G", "埃可病毒IgG质控品", "ECHOVIRUS IgG", "液体即用型", "3 mL/支"],
                    ["BC135M", "埃可病毒 IgM抗体检测质控品", "Echovirus IgM cont.", "液体即用型", "3 mL/支"],
                    ["BC1371A", "肺炎衣原体IgA质控品", "CHLAMYDIA PNEUMONIAE IgA", "液体即用型", "3 mL/支"],
                    ["BC1371G", "肺炎衣原体IgG质控品", "CHLAMYDIA PNEUMONIAE IgG", "液体即用型", "3 mL/支"],
                    ["BC1371M", "肺炎衣原体IgM质控品", "CHLAMYDIA PNEUMONIAE IgM", "液体即用型", "3 mL/支"]
                ],
                // 胃肠道疾病系列
                [
                    [""],
                    [""],
                    ["BC118A", "幽门螺旋杆菌 IgA质控品", "Helicobacter pylori IgA  control", "液体即用型", "3 mL/支"],
                    ["BC118G", "幽门螺旋杆菌 IgG质控品", "Helicobacter pylori IgG  control", "液体即用型", "3 mL/支"],
                    ["BC118M", "幽门螺旋杆菌 IgM质控品", "Helicobacter pylori IgM  control", "液体即用型", "3 mL/支"],
                    ["BC133A", "肠道病毒IgA质控品", "ENTEROVIRUS IgA", "液体即用型", "3 mL/支"],
                    ["BC133G", "肠道病毒IgG质控品", "ENTEROVIRUS IgG", "液体即用型", "3 mL/支"],
                    ["BC133M", "肠道病毒IgM质控品", "ENTEROVIRUS IgM", "液体即用型", "3 mL/支"],
                    ["BC134A", "柯萨奇病毒IgA质控品", "COCKSACKIE IgA", "液体即用型", "3 mL/支"],
                    ["BC134G", "柯萨奇病毒IgG质控品", "COCKSACKIE IgG", "液体即用型", "3 mL/支"],
                    ["BC134M", "柯萨奇病毒 IgM抗体检测质控品", "Cocksackie IgM cont.", "液体即用型", "3 mL/支"],
                    ["BC135A", "埃可病毒IgA质控品", "ECHOVIRUS IgA", "液体即用型", "3 mL/支"],
                    ["BC135G", "埃可病毒IgG质控品", "ECHOVIRUS IgG", "液体即用型", "3 mL/支"],
                    ["BC135M", "埃可病毒 IgM抗体检测质控品", "Echovirus IgM cont.", "液体即用型", "3 mL/支"],
                    ["BC139A", "空肠弯曲杆菌IgA质控品", "CAMPYLOBACTER JEJUNI IgA", "液体即用型", "3 mL/支"],
                    ["BC139G", "空肠弯曲杆菌IgG质控品", "CAMPYLOBACTER JEJUNI IgG", "液体即用型", "3 mL/支"],
                    ["BC139M", "空肠弯曲杆菌IgM质控品", "CAMPYLOBACTER JEJUNI IgM", "液体即用型", "3 mL/支"]
                ],

                //鼻咽癌相关病毒系列
                [
                    [""],
                    [""],
                    ["BC1361G", "EB病毒VCA IgG质控品", "EPSTEIN-BARR VIRUS VCAIgG", "液体即用型", "3 mL/支"],
                    ["BC1361M", "EB病毒VCA IgM质控品", "EPSTEIN-BARR VIRUS VCAIgM", "液体即用型", "3 mL/支"],
                    ["BC1362G", "EB病毒NA-1 IgG质控品", "EPSTEIN-BARR VIRUS EBNA1IgG", "液体即用型", "3 mL/支"],
                    ["BC1363G", "EB病毒早期蛋白IgG质控品", "EPSTEIN-BARR VIRUS EAIgG", "液体即用型", "3 mL/支"]
                ],
                // 人畜共患系列
                [
                    [""],
                    [""],
                    ["BC107G", "棘球绦虫IgG 质控品", "Echinococcus IgG", "液体即用型", "3 mL/支"],
                    ["BC110G", "刚地弓形虫 IgG抗体检测质控品", "Toxoplasma gondii  IgG cont.", "液体即用型", "3 mL/支"],
                    ["BC110M", "刚地弓形虫 IgM抗体检测质控品", "Toxoplasma gondii  IgM cont.", "液体即用型", "3 mL/支"],
                    ["BC112G", "蜱传脑炎病毒IgG质控品", "FSME Virus /TBE Virus IgG", "液体即用型", "3 mL/支"],
                    ["BC112M", "蜱传脑炎病毒IgM质控品", "FSME Virus /TBE Virus IgM", "液体即用型", "3 mL/支"],
                    ["BC116A", "布鲁氏杆菌IgA质控品", "BRUCELLA IgA", "液体即用型", "3 mL/支"],
                    ["BC116G", "布鲁氏杆菌IgG质控品", "BRUCELLA IgG", "液体即用型", "3 mL/支"],
                    ["BC116M", "布鲁氏杆菌IgM质控品", "BRUCELLA IgM", "液体即用型", "3 mL/支"],
                    ["BC121G", "博氏疏螺旋体IgG质控品", "BORRELIA BURGDORFERI IgG", "液体即用型", "3 mL/支"],
                    ["BC121M", "博氏疏螺旋体IgM质控品", "BORRELIA BURGDORFERI IgM", "液体即用型", "3 mL/支"],
                    ["BC125G", "钩端螺旋体IgG质控品", "LEPTOSPIRA IgG", "液体即用型", "3 mL/支"],
                    ["BC125M", "钩端螺旋体IgM质控品", "LEPTOSPIRA IgM", "液体即用型", "3 mL/支"],
                    ["BC1312G", "Q热柯克斯体2相IgG质控品", "COXIELLA BURNETII PHASE2 (Q-Fieber) IgG", "液体即用型", "3 mL/支"],
                    ["BC1312M", "Q热柯克斯体2相IgM质控品", "COXIELLA BURNETII PHASE2 (Q-Fieber) IgM", "液体即用型", "3 mL/支"],
                    ["BC139A", "空肠弯曲杆菌IgA质控品", "CAMPYLOBACTER JEJUNI IgA", "液体即用型", "3 mL/支"],
                    ["BC139G", "空肠弯曲杆菌IgG质控品", "CAMPYLOBACTER JEJUNI IgG", "液体即用型", "3 mL/支"],
                    ["BC139M", "空肠弯曲杆菌IgM质控品", "CAMPYLOBACTER JEJUNI IgM", "液体即用型", "3 mL/支"]
                ],
                // 虫媒传染系列
                [
                    [""],
                    [""],
                    ["BC112G", "蜱传脑炎病毒IgG质控品", "FSME Virus /TBE Virus IgG", "液体即用型", "3 mL/支"],
                    ["BC112M", "蜱传脑炎病毒IgM质控品", "FSME Virus /TBE Virus IgM", "液体即用型", "3 mL/支"]
                ],
                // 衣原体感染系列
                [
                    [""],
                    [""],
                    ["BC1371A", "肺炎衣原体IgA质控品", "CHLAMYDIA PNEUMONIAE IgA", "液体即用型", "3 mL/支"],
                    ["BC1371G", "肺炎衣原体IgG质控品", "CHLAMYDIA PNEUMONIAE IgG", "液体即用型", "3 mL/支"],
                    ["BC1371M", "肺炎衣原体IgM质控品", "CHLAMYDIA PNEUMONIAE IgM", "液体即用型", "3 mL/支"],
                    ["BC1372A", "沙眼衣原体IgA质控品", "CHLAMYDIA TRACHOMATIS IgA", "液体即用型", "3 mL/支"],
                    ["BC1372G", "沙眼衣原体IgG质控品", "CHLAMYDIA TRACHOMATIS IgG", "液体即用型", "3 mL/支"],
                    ["BC1372M", "沙眼衣原体IgM质控品", "CHLAMYDIA TRACHOMATIS IgM", "液体即用型", "3 mL/支"]
                ],
                // 真菌感染系列
                [
                    [""],
                    [""],
                    ["BC117A", "白色念珠菌IgA质控品", "CANDIDA ALBICANS IgA", "液体即用型", "3 mL/支"],
                    ["BC117G", "白色念珠菌IgG质控品", "CANDIDA ALBICANS IgG", "液体即用型", "3 mL/支"],
                    ["BC117M", "白色念珠菌IgM质控品", "CANDIDA ALBICANS IgM", "液体即用型", "3 mL/支"],
                    ["BC200", "白色念珠菌抗原质控品", "CANDIDA ANTIGEN", "液体即用型", "3 mL/支"],
                    ["BC132A", "烟曲霉菌IgA质控品", "ASPERGILLUS FUMIGATUS IgA", "液体即用型", "3 mL/支"],
                    ["BC132G", "烟曲霉菌IgG质控品", "ASPERGILLUS FUMIGATUS IgG", "液体即用型", "3 mL/支"],
                    ["BC132M", "烟曲霉菌IgM质控品", "ASPERGILLUS FUMIGATUS IgM", "液体即用型", "3 mL/支"]
                ]
            ],
            // 3酶联免疫试剂盒
            [

                // 免疫效果监测系列（8）
                [
                    ["预防接种是预防和控制传染病最经济、最有效的手段。但是接种疫苗并非100%产生抗体，接种后体内抗体水平也会逐渐下降。<br />" +
                    "因此，通过对抗体水平的动态监测，能够及时了解疫苗接种效果，进行疫苗查漏补种工作。<br />" +
                    "血清中特异性IgG抗体定量检测是免疫效果监测最简单易行的方法。<br />" +
                    "SERION ELISA Classic的免疫试剂可用于定量检测IgG抗体亲和力水平，特别适用于监测抗体保护水平。"],
                    ["·安全性：实验操作时应严格按照实验室生物、化学安全规定进行。<br />" +
                    "·用途：本产品仅供于科研或体外诊断用，不能用于人体实验或治疗。"],
                    ["ESR1201G", "百日咳毒素 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR120G", "百日咳杆菌 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR130G", "白喉杆菌 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR102G", "麻疹病毒 lgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR103G", "腮腺炎病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],

                    ["ESR108G", "破伤风杆菌 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR104G", "水痘-带状疱疹病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                        ["ESR129G", "风疹病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"]

                ],
                // TORCH系列（13）
                [
                    ["妊娠期传染病的抗体水平监测，有利于评估孕妇的免疫状态，区分是原发感染还是既往感染，同时为产前诊断胎儿宫内感染寻找手术指征。"],
                    [""],
                    ["ESR110G", "弓形虫 IgG抗体", "酶联免疫法", "定量检测", "96T"],
                    ["ESR110M", "弓形虫 IgM抗体", "酶联免疫法", "定量检测", "96T"],
                    ["ESR129G", "风疹病毒 IgG抗体", "酶联免疫法", "定量检测", "96T"],
                    ["ESR129M", "风疹病毒 IgM抗体", "酶联免疫法", "定量检测", "96T"],
                    ["ESR109G", "巨细胞病毒 IgG抗体", "酶联免疫法", "定量检测", "96T"],
                    ["ESR109M", "巨细胞病毒 IgM抗体", "酶联免疫法", "定量检测", "96T"],
                    ["ESR105A", "单纯疱疹病毒1+2型 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR105G", "单纯疱疹病毒1+2型 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR105M", "单纯疱疹病毒1+2型 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1051G", "单纯疱疹病毒1型 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1051M", "单纯疱疹病毒1型 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1052G", "单纯疱疹病毒2型 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1052M", "单纯疱疹病毒2型 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"]
                ],
                // 儿童疾病系列（56）
                [
                    ["儿童阶段发生的传染病具有较强的传染性。<br />" +
                    "全球每年约有 1300万名儿童由于感染性疾病而死亡，是导致儿童死亡或残疾的第一原因。<br />" +
                    "相关的疾病包括手足口病、呼吸道病毒感染、麻风腮、百白破和传染性单核细胞增多症等。"],
                    [""],
                    ["ESR1201A", "百日咳毒素 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1201G", "百日咳毒素 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR120A", "百日咳杆菌 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR120G", "百日咳杆菌 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR120M", "百日咳杆菌 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR130G", "白喉杆菌 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR108G", "破伤风杆菌 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR102G", "麻疹病毒 lgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR102M", "麻疹病毒 lgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR129G", "风疹病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR129M", "风疹病毒 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR103G", "腮腺炎病毒 lgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR103M", "腮腺炎病毒 lgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR122G", "细小病毒B19 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR122M", "细小病毒B19 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR104A", "水痘-带状疱疹病毒 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR104G", "水痘-带状疱疹病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR104M", "水痘-带状疱疹病毒 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1231A", "流感病毒A型 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1231G", "流感病毒A型 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1231M", "流感病毒A型 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1232A", "流感病毒B型 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1232G", "流感病毒B型 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1232M", "流感病毒B型 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1362G", "EB病毒 EBNA1 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1361G", "EB病毒 VCA IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1361M", "EB病毒 VCA IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1363G", "EB病毒早期 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR113A", "呼吸道合胞病毒 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR113G", "呼吸道合胞病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR113M", "呼吸道合胞病毒 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR134A", "柯萨奇病毒 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR134G", "柯萨奇病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR134M", "柯萨奇病毒 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR135A", "埃可病毒 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR135G", "埃可病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR135M", "埃可病毒 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR133A", "肠道病毒 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR133G", "肠道病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR133M", "肠道病毒 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR126A", "副流感病毒 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR126G", "副流感病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1371A", "肺炎衣原体 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1371G", "肺炎衣原体 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1371M", "肺炎衣原体 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR127A", "肺炎支原体 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR127G", "肺炎支原体 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR127M", "肺炎支原体 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR128A", "腺病毒 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR128G", "腺病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR128M", "腺病毒 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR139A", "空肠弯曲杆菌 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR139G", "空肠弯曲杆菌 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR139M", "空肠弯曲杆菌 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"]
                ],
                // 皮肤性病系列（5）
                [
                    ["性病是在世界范围内广泛流行的一组常见传染病，并呈现流行范围扩大、发病年龄降低、耐药菌株增多的趋势，已成为严重的公共健康问题。<br />" +
                    "在进行HIV筛查的同时，建议增加单纯疱疹项目的检测。"],
                    [""],
                    ["ESR105A", "单纯疱疹病毒1+2型 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1051G", "单纯疱疹病毒1型 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1051M", "单纯疱疹病毒1型 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1052G", "单纯疱疹病毒2型 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1052M", "单纯疱疹病毒2型 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"]
                ],
                // 疱疹病毒系列（12）
                [
                    ["疱疹病毒是已知的亚型最多的病毒，结构复杂。病毒主要侵犯外胚层来源的组织，包括皮肤、粘膜和神经组织。<br />" +
                    "感染部位和引起的疾病多种多样，并有潜伏感染的趋势，严重影响人类健康。"],
                    [""],
                    ["ESR1051G", "单纯疱疹病毒1型 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1051M", "单纯疱疹病毒1型 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1052G", "单纯疱疹病毒2型 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1052M", "单纯疱疹病毒2型 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR105A", "单纯疱疹病毒1+2型 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR105G", "单纯疱疹病毒1+2型 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR105M", "单纯疱疹病毒1+2型 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR104A", "水痘-带状疱疹病毒 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR104G", "水痘-带状疱疹病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR104M", "水痘-带状疱疹病毒 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR109G", "巨细胞病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR109M", "巨细胞病毒 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"]
                ],
                // 呼吸道疾病系列（39）
                [
                    ["呼吸道感染，特别是由细菌和病毒引起的传染病，是在世界范围内最常见的疾病。<br />" +
                    "及时、准确检测各类呼吸道传染病，对流行病学调查、日常监测和科学研究具有重要意义。"],
                    [""],
                    ["ESR113A", "呼吸道合胞病毒 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR113G", "呼吸道合胞病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR113M", "呼吸道合胞病毒 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1371A", "肺炎衣原体 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1371G", "肺炎衣原体 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1371M", "肺炎衣原体 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR127A", "肺炎支原体 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR127G", "肺炎支原体 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR127M", "肺炎支原体 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR128A", "腺病毒 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR128G", "腺病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR128M", "腺病毒 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR106G", "嗜肺军团菌1-7 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR106M", "嗜肺军团菌1-7 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1231A", "流感病毒A型 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1231G", "流感病毒A型 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1231M", "流感病毒A型 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1232A", "流感病毒B型 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1232G", "流感病毒B型 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1232M", "流感病毒B型 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR134A", "柯萨奇病毒 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR134G", "柯萨奇病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR134M", "柯萨奇病毒 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR135A", "埃可病毒 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR135G", "埃可病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR135M", "埃可病毒 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1201A", "百日咳毒素 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1201G", "百日咳毒素 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR120A", "百日咳杆菌 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR120G", "百日咳杆菌 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR120M", "百日咳杆菌 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR133A", "肠道病毒 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR133G", "肠道病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR133M", "肠道病毒 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1312G", "Q热立克次体2相 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1312M", "Q热立克次体2相 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR126A", "副流感病毒 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR126G", "副流感病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"]
                ],
                // 胃肠道疾病系列（15）
                [
                    ["胃肠道疾病是由多种细菌或病毒感染引起，全球发病率约20%。"],
                    [""],
                    ["ESR139A", "空肠弯曲杆菌 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR139G", "空肠弯曲杆菌 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR139M", "空肠弯曲杆菌 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR134A", "柯萨奇病毒 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR134G", "柯萨奇病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR134M", "柯萨奇病毒 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR135A", "埃可病毒 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR135G", "埃可病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR135M", "埃可病毒 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR133A", "肠道病毒 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR133G", "肠道病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR133M", "肠道病毒 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR118A", "幽门螺旋杆菌 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR118G", "幽门螺旋杆菌 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR118M", "幽门螺旋杆菌 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"]
                ],
                // 鼻咽癌相关病毒系列（6）
                [
                    ["鼻咽癌是我国高发恶性肿瘤之一，发病率位于耳鼻咽喉恶性肿瘤之首。<br />" +
                    "大量研究表明EBV与鼻咽癌的发生、发展密切相关。EBV血清学检查是鼻咽癌监测的重要手段。"],
                    [""],
                    ["ESR1362G", "EB病毒 EBNA1 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1361A", "EB病毒 VCA IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1361G", "EB病毒 VCA IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1361M", "EB病毒 VCA IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1363A", "EB病毒早期 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1363G", "EB病毒早期 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"]
                ],
                // 人畜共患系列（20）
                [
                    ["人畜共患病是在人类和动物之间自然传播的疾病。病原体包括病毒、细菌、真菌、支原体、衣原体、立克次氏体、螺旋体、寄生虫等。<br />" +
                    "近年来，人畜共患病在全球呈上升趋势，严重影响我国的公共卫生安全。"],
                    [""],
                    ["ESR121G", "伯氏疏螺旋体 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR121M", "伯氏疏螺旋体 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR116A", "布鲁氏杆菌 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR116G", "布鲁氏杆菌 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR116M", "布鲁氏杆菌 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR139A", "空肠弯曲杆菌 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR139G", "空肠弯曲杆菌 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR139M", "空肠弯曲杆菌 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1311A", "Q热立克次体1相 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1312G", "Q热立克次体2相 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1312M", "Q热立克次体2相 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR107G", "棘球绦虫 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR142G", "土拉热弗朗西丝氏菌 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR142M", "土拉热弗朗西丝氏菌 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR112G", "蜱传脑炎病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR112M", "蜱传脑炎病毒 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR125G", "钩端螺旋体 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR110G", "弓形虫 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR110M", "弓形虫 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR147G", "利什曼原虫 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"]
                ],
                // 虫媒传染系列（6）
                [
                    ["虫媒传染病是由病媒生物传播的疾病。<br />" +
                    "危害性较强的虫媒传染病包括流行性乙型脑炎、鼠疫、莱姆病、疟疾、登革热等。"],
                    [""],
                    ["ESR142G", "土拉热弗朗西丝氏菌 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR142M", "土拉热弗朗西丝氏菌 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR112G", "蜱传脑炎病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR112M", "蜱传脑炎病毒 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR114G", "登革热病毒 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR114M", "登革热病毒 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"]
                ],
                // 衣原体感染系列（6）
                [
                    ["沙眼衣原体主要寄生于机体粘膜的上皮细胞，在眼睛粘膜、呼吸道和生殖系统引起病变。<br />" +
                    "未经治疗的衣原体感染可导致失明、不育和关节炎。肺炎衣原体可以引起慢性支气管炎和肺炎。"],
                    [""],
                    ["ESR1371A", "肺炎衣原体 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1371G", "肺炎衣原体 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1371M", "肺炎衣原体 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1372A", "沙眼衣原体 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1372G", "沙眼衣原体 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR1372M", "沙眼衣原体 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"]
                ],
                // 真菌感染系列（7）
                [
                    ["真菌感染疾病是由真菌感染引起，主要分为曲霉菌病、念珠菌病和隐球菌病等。<br />" +
                    "高风险患者的免疫功能低下，易发生深部真菌感染，对健康和生命构成严重威胁。<br />" +
                    "曲霉菌属和念珠菌的特异性抗体检测，对预防、监测真菌感染具有重要作用。"],
                    [""],
                    ["ESR132A", "烟曲霉菌 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR132G", "烟曲霉菌 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR132M", "烟曲霉菌 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR117A", "白色念珠菌 IgA抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR117G", "白色念珠菌 IgG抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR117M", "白色念珠菌 IgM抗体检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["ESR200", "白色念珠菌抗原检测试剂盒", "酶联免疫法", "定量检测", "96T"]
                ],
                // IgG抗体亲和力检测系列
                [
                    ["亲和力检测试剂可用于测定病原体的特异性IgG抗体的亲和力。<br />" +
                    "测定孕妇的产前血清IgG抗体亲和力，可区分原发感染和既往感染。"],
                    [""],
                    ["B129AVID", "风疹病毒IgG亲和力检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["B110AVID", "弓形虫IgG亲和力检测试剂盒", "酶联免疫法", "定量检测", "96T"],
                    ["B109AVID", "巨细胞病毒IgG亲和力检测试剂盒", "酶联免疫法", "定量检测", "96T"]
                ]
            ],
            // 4原辅料
            [
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
var searchWord = searchUrl.split(",range=")[0]
var range = searchUrl.split(",range=")[1]
// 检索与搜索字段匹配的Nav
if(searchUrl!= undefined) {

    if (searchWord != "") {
        var i = 0
        var len = vm._data.Nav1.length
        if(range != "all"){
            i = range
            len = range
        }

        for (var i = 0; i < len; i++) {
            // 展示第一个标题
            if (vm._data.Nav1[i].indexOf(searchWord) != -1) {
                refreshNav1(i)
            }

            for (var j = 0; j < vm._data.Nav2[i].length; j++) {
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
    console.log("nav")
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
    console.log(a)
    $first = $(".layui-nav-item").eq(a)
    $first.addClass("layui-nav-itemed")
}

function refreshNav2(a, b) {
    $first = $(".layui-nav-item").eq(a)
    $first.addClass("layui-nav-itemed")

    $second = $first.children(".layui-nav-child").eq(b)
    console.log($second.prop("nodeName"))
    if( $second.children().length > 1)
        $second.addClass("layui-nav-itemed")
    else
        $second.addClass("layui-this")
    $second.trigger("click")
}

function refreshNav3(a, b, c) {

}

