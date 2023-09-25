import { dataCalon } from "./interfaces/dataCalon";

const svg = `<svg class="h-4 sm:h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3063af">
<path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
</svg>
`;

export const templateList = (title: string): string => {
    return `<section class="flex flex-row h-full mt-4">
    <div class="min-w-[14px] sm:min-w-[20px] flex items-center pr-2">
        ${svg}
    </div>
    <div>
        <p>${title}</p>
    </div>
</section>`;
};

export const firstCaketosData: dataCalon = {
    visi: "Menjadikan OSIS SMK Negeri 8 SEMARANG sebagai organisası yang berintegritas, cerdas, mandiri dan lebih maju. Serta menjunjung tinggi nilai tanggung jawab, gotong royong, etika, dan akhlak mulia yang berdasarkan pancasila.",
    misi: [
        "Mengutamakan segala aspek dalam nilai religius yang berdararkan ketuhanan YME.",
        "Menjadikan OSIS sebagai wadah aspirasi, agar dapat melaksanakan program pengembangan diri yang dapat diikuti oleh seluruh siswa siswi SMK Negeri 8 SEMARANG.",
        "Meningkatkan prestasi siswa siswi SMK Negeri 8 SEMARANG dalam bidang akademik & non akademik dengan progam bersama.",
    ],
    proker: [
        "Mengadakan acara acara saat hari besar keagamaan seperti ramadhan, maulid nabi, isra' miraj, natal, paskah, dan hari besar keagaman lainnya.",
        "Menggelar pentas seni, event atau lomba upaya meningkatkan kepercayaan diri dan mengasah bakat minat oleh seluruh siswa siswi SMK Negeri 8 SEMARANG",
        "Mendorong seluruh siswa & siswi SMK Negeri 8 SEMARANG untuk mengikuti kegiatan akademik & non akademik yang diadakan disekolah maupun diluar sekolah.",
    ],
};

export const secondCaketosData: dataCalon = {
    visi: "Membangun mendorong serta mewujudkan osis sebagai organisasi yang RUKOSAM (Rukun Kompak Kerjasama Yang Baik), berpengaruh tidak terpengaruh serta karakter yang profesional, religius, dan mandiri.",
    misi: [
        "Menjadikan osis sebagai wadah untuk berwirausaha yang baik dan terkoordinir.",
        "Kolaborasi serta kerjasama yang baik antar organisasi sekolah.",
        "Mewujudkan lingkungan sekolah yang go green.",
        "Menjadikan osis sebagai tempat aspirasi, kritik dan saran, serta organisasi yang bermusyawarah untuk tercapainya demokrasi.",
        "Melanjutkan proker serta event osis sebelumnya serta mengembangkan dan menginovasikannya dengan lebih baik.",
    ],
    proker: [
        "Baju Barokah (menjembatani bagi alumni yang secara sukarela akan menyumbangkan seragam untuk adik kelas yang layak pakai).",
        "Teatrikal drama perjuangan november.",
        "Membuat laman/program untuk tempat kritik dan saran (laporosis).",
        "Membuat kalender tahunan sekolah.",
        "Sosialisasi sekolah go green.",
    ],
};

export const thirdCaketosData: dataCalon = {
    visi: "MENJADI CONTOH PEMIMPIN  YANG MENGINSPIRASI DAN TERBUKA , SERTA MEWUJUDKAN SEKOLAH YANG KREATIF INOVATIF DAN MEMILIKI DAYA SAING TINGGI.",
    misi: [
        "Mengupayakan peningkatan kualitas pengajaran dan pembelajaran dengan melibatkan guru dan siswa dalam proses pendidikan.",
        "Mendorong pengembangan kepemimpinan siswa melalui pelatihan, seminar, atau proyek-proyek kepemimpinan. Serta  berusaha agar lebih banyak siswa terlibat dalam kegiatan sekolah dan OSIS, dengan mengadakan acara yang menarik dan relevan bagi mereka.",
        "Memastikan bahwa setiap siswa merasa diterima dan dihargai di sekolah, tanpa diskriminasi.",
        "Membangun hubungan yang kuat antara sekolah komunitas sekitar atau perusahaan dengan mengadakan proyek bersama atau acara-acara terbuka bisa juga dengan menjalin kerjasama seperti sponsor.",
        "Mendukung keberhasilan klub dan organisasi di sekolah dengan memberikan pelatihan, sumber daya, dan bantuan dalam mengorganisir kegiatan.",
    ],
    proker: [
        "Mengkoordinasi seluruh anggota pengurus osis dalam hal berorganisasi.",
        "Mengadakan rapat proker setahun masa jabatan.",
        "Menetapkan kebijaksanaan atau proker yang telah dipersiapkan  dan direncanakan sebelumnya oleh anggota pengurus osis.",
        "Mengevalusi Kegiatan seluruh pengurus  osis terutama setelah melakukan kegiatan seperti event event.",
        "Mengadakan pelatihan kepemimpinan reguler bagi pengurus organisasi.",
        "Bekerja sama dengan ekstrakulikuler atau organisasi di SMKN 8 SMG untuk memajukan dan menjalankan event seperti event kegamaan dan lain lain.",
        "Mengadakan event event lomba untuk memperingati hari hari tertentu seperti hari Kemerdekaan,  Haornas , Kartini, Dan lainnya.",
    ],
};

export const firstCakempkData: dataCalon = {
    visi: "MPK SMKN 8 SEMARANG sebagai pilar aspirasi yang bertanggung jawab dan disiplin dengan mengoptimalkan kinerja serta membangun kerja sama yang sehat.",
    misi: [
        "Menjadikan MPK SMKN 8 SEMARANG sebagai wadah aspirasi yang inklusif dan terbuka untuk menggali dan mewujudkan aspirasi siswa.",
        "Meningkatkan rasa tanggung jawab anggota MPK dalam menjalankan tugas-tugas MPK dengan mengedepankan nilai-nilai etika dalam setiap aspek kehidupan sekolah.",
        "Menjadikan anggota MPK sebagai contoh kedisiplinan bagi lingkungan sekolah.",
        "Mengoptimalkan kinerja MPK serta memastikan efisiensi penggunaan sumber daya dalam menjalankan program-program yang berdampak positif.",
        "Meningkatkan daya pikir kritis siswa melalui berbagai media.",
    ],
    proker: [
        "Mengadakan event yang dapat meningkatkan kreatifitas dan daya pikir kritis siswa maupun anggota MPK.",
        "Membuat konten rutin yang dapat meningkatkan daya pikir kritis siswa lewat media sosial MPK SMKN 8 SEMARANG.",
        "Mengisi majalah dinding dengan pembahasan dan tampilan yang menarik setiap 2 bulan sekali.",
        "Mengadakan pertemuan seluruh ketua kelas untuk menyampaikan aspirasi siswa siswi kepada MPK.",
    ],
};

export const secondCakempkData: dataCalon = {
    visi: "Mewujudkan MPK SMKN 8 Semarang sebagai legislator muda yang GESIT (gigih, efektif, sigap, inovatif, terbuka) serta organisasi yang kredibel demi aspirasi bersama.",
    misi: [
        "Menjadikan MPK sebagai organisasi yang sigap dalam menangani aspirasi.",
        "Menjembatani aspirasi siswa untuk mengembangkan bakat, potensi, serta kritik, dan saran generasi milenial.",
        "Menghadirkan kerja cerdas, kerja keras, kerja ikhlas, dan kerja tuntas.",
        "Wujudkan integritas, profesionalitas, dan kekeluargaan antar organisasi.",
        "Meningkatkan kinerja terhadap segala bidang yang dinaungi MPK.",
    ],
    proker: [
        "Tempura (temu Purna), Talkshow dengan mengundang alumni-alumni hebat diikuti oleh siswa siswi SMKN 8.",
        "Rapat Triwulan, Pertemuan Osis dan MPK setiap 3 bulan sekali guna memperbaiki kinerja serta meningkatkan solidaritas antar anggota.",
        "Mengkoordinasikan aspirasi siswa agar tercipta kegiatan sesuai dengan minat siswa.",
        "Menjalankan pengawasan dan evaluasi terhadap osis sesuai dengan GBPK (Garis Besar Program Kerja).",
        "Mengadakan pemilihan serta orasi ketua Osis maupun MPK.",
    ],
};

export const thirdCakempkData: dataCalon = {
    visi: "Menjadikan MPK SMKN 8 semarang sebagai organisasi yang terbuka, terpercaya, bertanggung jawab, disiplin, dan berakhlak mulia.",
    misi: [
        "Meningkatkan kinerja OSIS, MPK, dan ekstrakurikuler di sekolah.",
        "Mengoptimalkan penyampaian aspirasi siswa ke sekolah secara langsung.",
        "Membentuk karakter seluruh warga SMKN 8 semarang menjadi orang yang bertanggung jawab, disiplin, dan Bijak.",
    ],
    proker: [
        "Melakukan Pemilos dan Pemilom.",
        "Mengadakan pertemuan OSIS dan MPK untuk penampungan dalam penyampaian aspirasi siswa dan meningkatkan keharmonisan seluruh warga sekolah.",
        "Membuat forum komunikasi siswa guna mengatasi bullying.",
        "Bekerja sama dengan OSIS untuk membuat event event yang menarik untuk mengembangkan bakat siswa/siswi.",
    ],
};

//
