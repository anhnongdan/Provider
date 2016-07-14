
fname = './provider.txt';

# The order of the items in below list DOES affect the resulted
# dictionary file. Please be careful. A special case which belongs
# to another more general one need to be above of the general one.
# E.g: 'viettel (cambodia' need to be above of viettel
providerNameDictionary = {


    #include 'phnompenh' and 'viettel cambodia'
    'viettel (cambodia':'Viettel Cambodia Pte.',

    'viettel':'Viettel Corporation',
    'vietel':'Viettel Corporation',

    #env does not exist
    #'evn':'Viettel Corporation',
    'electric telecommunication':'Viettel Corporation',
    'fpt':'FPT Telecom Company',
    'vnpt':'(VNPT) Vietnam Posts and Telecommunications',
    'vdc':'(VNPT) Vietnam Posts and Telecommunications',

    'cmc telecom': 'CMC Telecommunications Services Company',

    'vnnic' : 'VNNIC - Vietnam Internet Network Information Center',
    'beeline': 'BeeLine',
    'hanoi telecom': 'Hanoi Telecom JSC',

    #QTSC has several names
    'quang trung software city': 'Quang Trung Software City (QTSC)',

    #NetNam and saigon postel
    'saigon postel': 'Saigon Postel JSC',
    'netnam': 'NetNam',

    #from DB of IPLocation2
    'lo vp1, phuong yen hoa': 'Mobifone',

    #Include VTC Wireless and VTC Multimedia
    'vtc' : 'VTC',

    #FPT
    'dai IP dong su dung cho ket noi xdsl': 'FPT Telecom Company',

    #Tong Cuc thue - provided by VNNIC
    # descr:          Cuc CNTT-Tong cuc Thue
    # descr:          HITC Tower, 239 Xuan Thuy, Cau Giay, Ha Noi
    # country:        VN
    # import:         from AS7643 action pref=10; accept ANY
    # import:         from AS56149 action pref=10; accept ANY
    # export:         to AS7643 announce AS131363
    # export:         to AS56149 announce AS131363
    # admin-c:        PQT9-AP
    # tech-c:         NTL9-AP
    # mnt-by:         MAINT-VN-VNNIC
    # mnt-routes:     MAINT-VN-VNNIC
    # mnt-irt:        IRT-VNNIC-AP
    # changed:        hm-changed@vnnic.net.vn 20120725
    # source:         APNIC
    #
    #
    # mntner:       MAINT-VN-VNNIC
    # upd-to:       nhung@vnnic.net.vn
    # descr:        Vietnam Internet network Information center (VNNIC)
    # descr:        18 Nguyen Du Str, Hai Ba Trung Distrist
    # descr:        Hanoi, Vietnam
    # admin-c:      PT174-AP
    # tech-c:       NTTT1-AP
    # referral-by:  APNIC-HM
    # changed:      hm-changed@vnnic.net.vn 20081219
    # mnt-by:       MAINT-VN-VNNIC
    # source:       APNIC
    'cuc cntt-tong cuc thue': 'Cuc CNTT-Tong cuc Thue',

    #short and long name
    'saigon tourist cable television': 'SaiGon Tourist Cable Television',

    #A weird ISP in Lao
    'telecommunication service - telecommunication service': "Telecommunication Service - Isp in Lao",

    #VTCdigicom??
    # as-name:        VTCDIGICOM-AS-VN
    # descr:          Digital Communications Company
    # descr:          631 Kim Nguu str, Hai Ba Trung Dist, Ha Noi
    # country:        VN
    # import:         from AS27256 action pref=100; accept ANY
    # import:         from AS38248 action pref=100; accept ANY
    # export:         to AS27256 announce AS38726
    # export:         to AS38248 announce AS38726
    # remarks:        AS-SET AS-38726
    # admin-c:        TTH15-AP
    # tech-c:         PBK5-AP
    # notify:         hm-changed@vnnic.net.vn
    # mnt-by:         MAINT-VN-VNNIC
    # changed:        hm-changed@vnnic.net.vn 20071212
    # mnt-irt:        IRT-VNNIC-AP
    # source:         APNIC
    'digital communications company': 'VTC DIGICOM',
}

excludedItems = {
    #For Viettel abroad, cambodia is in above list
    'cameroun',
    'tanzania',
    'burundi',
    'peru',

}

f = open(fname, 'r')
fwrite = open('providerDict0713.txt', 'w')
#f1 = open('viettel', 'w')
#f2 = open('fpt', 'w')

# for key in providerNameDictionary:
#     print("\'{0:s}\' => \'{1:s}\',".format(key, providerNameDictionary[key]))


for line in f:
    line = line[:-1].lower()
    for key in excludedItems:
        if key in line:
            continue
    for key in providerNameDictionary:
        if key in line:
            if line == providerNameDictionary[key].lower():
                break
            #print("\'{0:s}\' => \'{1:s}\',".format(line, providerNameDictionary[key]))
            fwrite.write("\'{0:s}\' => \'{1:s}\', \n".format(line, providerNameDictionary[key]))
            break

f.close()
fwrite.close()
