def fix(a):
    if a is None:
        return ""
    return a.replace(" ","").replace("\r","").replace("\n","").replace("&nbsp","")

'''
定义每次爬取的页数
'''
def getn():
    return 100



keyWord = [
    # 主要
    "水痘", "带状疱疹", "水痘带状疱疹病毒", "VZV", "Zoster virus", "chicken pox", "shingles", "Herpes", "shingles", "水痘带状疱疹病毒IgM", "水痘带状疱疹病毒IgG",
    "细小病毒", "人细小病毒", "B19", "细小病毒B19", "人细小病毒B19", "parvovirus", "细小病毒IgM", "细小病毒IgG",
    "百日咳杆菌IgG检测", "百日咳毒素IgG检测", "白喉IgG检测", "破伤风IgG", "麻疹IgG", "风疹IgG", "腮腺炎IgG", "水痘带状疱疹IgG", "百日咳丝状血凝素IgG/IgM检测",
    "百日咳杆菌IgG检测", "百日咳毒素IgG检测", "百日咳检测", "百日咳核酸检测", "百日咳丝状血凝素IgG/IgM检测",
    "百日咳杆菌IgG/IgM检测", "百日咳毒素IgG/IgM检测", "白喉IgG/IgM检测", "破伤风IgG/IgM", "百日咳丝状血凝素IgG/IgM检测",
    "麻疹IgG", "麻疹IgM", "麻疹核酸检测", "measles",
    "风疹IgG", "风疹IgM", "风疹核酸检测", "rubella",
    "流行性腮腺炎IgG", "流行性腮腺炎IgM", "流行性腮腺炎核酸检测", "Mumps",
#    次要
    "优生优育检测试剂", "弓形虫", "弓形虫IgM", "弓形虫IgG", "风疹", "风疹IgG", "风疹IgM", "麻疹IgG", "麻疹", "麻疹IgM", "巨细胞病毒", "CMV", "巨细胞病毒IgM", "巨细胞病毒IgG", "HSV", "单纯疱疹病毒", "单纯疱疹病毒1型", "单纯疱疹病毒2型", "单纯疱疹病毒1 + 2", "TORCH", "Torch",
    "棘球属", "包虫检测",
    "布鲁氏杆菌", "布病",
    "钩端螺旋体",
    "HSV-1", "单纯疱疹病毒1型", "单纯疱疹病毒1型IgM", "单纯疱疹病毒1型igG",
    "HSV-2", "单纯疱疹病毒2型", "单纯疱疹病毒2型IgG", "单纯疱疹病毒2型IgM",
    "HSV-1/2", "单纯疱疹病毒1+2型", "单纯疱疹病毒1+2型IgM", "单纯疱疹病毒1+2型IgG",
    "CMV ", "巨细胞病毒IgG", "巨细胞IgM",
    "弓形虫IgG", "弓形虫IgM",
    "登革热病毒检测", "登革热NS1检测", "登革热IgM", "登革热IgG", "登革热NS1 IgM", "登革热NS1 IgG",
    "肠道病毒", "肠道病毒IgG", "肠道病毒IgM", "EV71", "肠病毒EV71",
    "埃可病毒检测", "埃可病毒IgG", "埃可病毒IgM",
    "柯萨奇病毒检测", "coxAV16", "CoxAV10", "coxAV6",
    "EB病毒检测", "EB病毒VCA IgG/IgM", "EB病毒EBNA1 IgG/IgM", "EB病毒早期IgG/IgM",
    "烟曲霉菌检测", "烟曲霉菌IgM/IgG/IgA",
    "白色念珠菌抗原检测", "白色念珠菌IgA/IgG/IgM检测"
]

def findKeyWord(word):
    for key in keyWord:
        if key in word:
            return key
    return False


