--
-- Database: `sumedangss`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `nm_agenda` varchar(200) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id`, `nm_agenda`, `tanggal`) VALUES
(1, 'belajar', '2018-11-12'),
(2, 'belajar', '2018-11-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `gambar`, `tanggal`) VALUES
(1, 'adada', 'splash.PNG', '2018-11-12'),
(2, 'adadas', 'Houtarou_oreki.jpg', '2018-11-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak_masuk`
--

CREATE TABLE `kontak_masuk` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` date NOT NULL,
  `operator` varchar(100) NOT NULL,
  `balasan` text NOT NULL,
  `tgl_balasan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak_masuk`
--

INSERT INTO `kontak_masuk` (`id`, `nama`, `subjek`, `pesan`, `tanggal`, `operator`, `balasan`, `tgl_balasan`) VALUES
(2, 'aceng', 'kaka', 'hello there', '2018-11-15', 'Admin', 'hfya', '0000-00-00'),
(3, 'ucup', 'lebih dari tv', 'gfsg', '2018-11-16', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `struktur_organisasi`
--

INSERT INTO `struktur_organisasi` (`id`, `jabatan`, `nama`, `nip`, `nik`, `foto`) VALUES
(1, 'CAMAT', 'Kepala', '4141241', '24124124', 'camat.jpg'),
(2, 'SEKERTARIS', 'Admin', '2523525', '5325325', 'sekcam.jpg'),
(3, 'KASUBAG PROGRAM dan KEUANGAN', '', '', '', 'kasubagp.jpg'),
(4, 'KASUBAG UMUM ASET dan KEPEGAWAIAN', '', '', '', 'kasubagu.jpg'),
(5, 'KASI TATA PEMERINTAH', '', '', '', 'kasita.jpg'),
(6, 'KASI PMD', '', '', '', 'kasipmd.jpg'),
(7, 'KASI SOSIAL', '', '', '', 'kasisos.jpg'),
(8, 'KASI PELAYANAN UMUM', '', '', '', 'kasipela.jpg'),
(9, 'KASI TRANTIBUN', '', '', '', 'kasitran.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL,
  `judul_berita` varchar(200) NOT NULL,
  `waktu_publish` date NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `judul_berita`, `waktu_publish`, `isi_berita`, `gambar`) VALUES
(4, 'wrw', '2018-11-11', '<p>fjkahh adfhsjkafhsa jhasdhfiahf&nbsp;\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf&nbsp;\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\n\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\n\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\n\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\n\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\n\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\n\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\n\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\n\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\n\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\n\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\n\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\n\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\n\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\n\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\n\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\n\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\n\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\n\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\n\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\n\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\n\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\n\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\n\r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\nfjkahh adfhsjkafhsa jhasdhfiahf \r\n\r\n</p>', 'splash.PNG'),
(8, 'sadfsa', '2018-11-09', '<p>fsdaff</p>', 'Houtarou_oreki.jpg'),
(9, 'sfda', '2018-11-09', '<p>fsad</p>', 'new.PNG'),
(11, 'dfaf', '2018-11-21', '<p>fdsf</p>', '975bb0879ff0fb59c0208597d3dec761.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelurahan`
--

CREATE TABLE `tb_kelurahan` (
  `id` int(11) NOT NULL,
  `desa_kelurahan` varchar(200) NOT NULL,
  `jml_rt` int(11) NOT NULL,
  `jml_rw` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `klasifikasi` varchar(100) NOT NULL,
  `web_desa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelurahan`
--

INSERT INTO `tb_kelurahan` (`id`, `desa_kelurahan`, `jml_rt`, `jml_rw`, `status`, `klasifikasi`, `web_desa`) VALUES
(1, 'Sukamaju', 18, 10, 'Kota', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kepegawaian`
--

CREATE TABLE `tb_kepegawaian` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kepegawaian`
--

INSERT INTO `tb_kepegawaian` (`id`, `nama`, `nip`, `nik`, `jabatan`, `foto`) VALUES
(8, 'Admin', '4141241', '24124124', 'admin', 'Houtarou_oreki.jpg'),
(9, 'Admin', '4141241', '24124124', 'admin', 'Houtarou_oreki1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `jabatan` enum('camat','sekretaris','kasubag_pk','kasubag_uk','kasi_tp','kasi_pmd','kasi_sos','kasi_pu','kasi_tr','admin') NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id`, `username`, `jabatan`, `password`) VALUES
(1, 'kepalacamat', 'camat', 'a7ef39016e180d31113036650778c068'),
(2, 'sekcam', 'sekretaris', '3de0c935622cc80ed0f5998c327036e5'),
(3, 'kasuPK', 'kasubag_pk', '34ff0a16d32700e742490d4c27169e67'),
(4, 'kasuUK', 'kasubag_uk', 'b7f822c308c9874e4253cbf298ea8602'),
(5, 'kasTP', 'kasi_tp', '52157182f61c8ad9d43ece817a50af87'),
(6, 'kasTR', 'kasi_tr', '242dd0d35601c62cc6e1e18f15e5e954'),
(7, 'kasSOS', 'kasi_sos', 'ae0ce1058a3d5e033703d471a29ae474'),
(8, 'kasPMD', 'kasi_pmd', '7e333ba8a16c257acfcdc597aaa142f9'),
(9, 'kasPU', 'kasi_pu', 'd21b5becb66e544d1434bb1115baecfd'),
(10, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelayanan`
--

CREATE TABLE `tb_pelayanan` (
  `id` int(11) NOT NULL,
  `pelayanan` varchar(200) NOT NULL,
  `persyaratan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pelayanan`
--

INSERT INTO `tb_pelayanan` (`id`, `pelayanan`, `persyaratan`) VALUES
(1, 'KTP', 'blas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `imgprof` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_profil`
--

INSERT INTO `tb_profil` (`id`, `title`, `isi`, `imgprof`) VALUES
(1, 'Sejarah Sumedang Selatan', '', 'sejarahss.jpg'),
(2, 'visi dan misi', '', 'visimisi.jpg\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak_masuk`
--
ALTER TABLE `kontak_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kelurahan`
--
ALTER TABLE `tb_kelurahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kepegawaian`
--
ALTER TABLE `tb_kepegawaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pelayanan`
--
ALTER TABLE `tb_pelayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kontak_masuk`
--
ALTER TABLE `kontak_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_kelurahan`
--
ALTER TABLE `tb_kelurahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_kepegawaian`
--
ALTER TABLE `tb_kepegawaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_pelayanan`
--
ALTER TABLE `tb_pelayanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
