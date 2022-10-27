const Ziggy = {"url":"http:\/\/127.0.0.1:8000","port":8000,"defaults":{},"routes":{"debugbar.openhandler":{"uri":"_debugbar\/open","methods":["GET","HEAD"]},"debugbar.clockwork":{"uri":"_debugbar\/clockwork\/{id}","methods":["GET","HEAD"]},"debugbar.assets.css":{"uri":"_debugbar\/assets\/stylesheets","methods":["GET","HEAD"]},"debugbar.assets.js":{"uri":"_debugbar\/assets\/javascript","methods":["GET","HEAD"]},"debugbar.cache.delete":{"uri":"_debugbar\/cache\/{key}\/{tags?}","methods":["DELETE"]},"livewire.message":{"uri":"livewire\/message\/{name}","methods":["POST"]},"livewire.upload-file":{"uri":"livewire\/upload-file","methods":["POST"]},"livewire.preview-file":{"uri":"livewire\/preview-file\/{filename}","methods":["GET","HEAD"]},"presences.index":{"uri":"api\/presences","methods":["GET","HEAD"]},"presences.create":{"uri":"api\/presences\/create","methods":["GET","HEAD"]},"presences.store":{"uri":"api\/presences","methods":["POST"]},"presences.show":{"uri":"api\/presences\/{presence}","methods":["GET","HEAD"]},"presences.edit":{"uri":"api\/presences\/{presence}\/edit","methods":["GET","HEAD"]},"presences.update":{"uri":"api\/presences\/{presence}","methods":["PUT","PATCH"]},"presences.destroy":{"uri":"api\/presences\/{presence}","methods":["DELETE"],"bindings":{"presence":"id"}},"login":{"uri":"login","methods":["GET","HEAD"]},"logout":{"uri":"logout","methods":["POST"]},"register":{"uri":"register","methods":["GET","HEAD"]},"password.request":{"uri":"password\/reset","methods":["GET","HEAD"]},"password.email":{"uri":"password\/email","methods":["POST"]},"password.reset":{"uri":"password\/reset\/{token}","methods":["GET","HEAD"]},"password.update":{"uri":"password\/reset","methods":["POST"]},"password.confirm":{"uri":"password\/confirm","methods":["GET","HEAD"]},"home":{"uri":"home","methods":["GET","HEAD"]},"login.siswa":{"uri":"login_siswa","methods":["GET","HEAD"]},"user.index":{"uri":"user","methods":["GET","HEAD"]},"user.create":{"uri":"user\/create","methods":["GET","HEAD"]},"user.store":{"uri":"user","methods":["POST"]},"user.show":{"uri":"user\/{user}","methods":["GET","HEAD"]},"user.edit":{"uri":"user\/{user}\/edit","methods":["GET","HEAD"]},"user.update":{"uri":"user\/{user}","methods":["PUT","PATCH"]},"user.destroy":{"uri":"user\/{user}","methods":["DELETE"]},"grade.index":{"uri":"grade","methods":["GET","HEAD"]},"grade.create":{"uri":"grade\/create","methods":["GET","HEAD"]},"grade.store":{"uri":"grade","methods":["POST"]},"grade.show":{"uri":"grade\/{grade}","methods":["GET","HEAD"],"bindings":{"grade":"id"}},"grade.edit":{"uri":"grade\/{grade}\/edit","methods":["GET","HEAD"],"bindings":{"grade":"id"}},"grade.update":{"uri":"grade\/{grade}","methods":["PUT","PATCH"]},"grade.destroy":{"uri":"grade\/{grade}","methods":["DELETE"]},"admin.update.setPresence":{"uri":"admin\/presence\/setting","methods":["PUT"]},"admin.DBset":{"uri":"admin\/db_settings","methods":["GET","HEAD"]},"admin.editSettingPresence":{"uri":"admin\/edit_set_presence\/{id}","methods":["GET","HEAD"]},"admin.editDbset":{"uri":"admin\/edit_db_set\/{id}","methods":["GET","HEAD"]},"admin.hapusDbset":{"uri":"admin\/hapus_db_set\/{id}","methods":["DELETE"]},"admin.users":{"uri":"admin\/users","methods":["GET","HEAD"]},"tambah_user":{"uri":"admin\/tambah_user","methods":["GET","HEAD"]},"admin.import_users":{"uri":"admin\/users\/import","methods":["POST"]},"admin.import_temp_students":{"uri":"admin\/students\/import\/tempstudent","methods":["POST"]},"admin.import_students":{"uri":"admin\/students\/import","methods":["POST"]},"admin.import_teachers":{"uri":"admin\/teachers\/import","methods":["POST"]},"admin.export_students":{"uri":"admin\/students\/export","methods":["GET","HEAD"]},"admin.export_teachers":{"uri":"admin\/teachers\/export","methods":["GET","HEAD"]},"admin.create_user":{"uri":"admin\/create_user","methods":["POST"]},"students":{"uri":"operator\/students","methods":["GET","HEAD"]},"student_detail":{"uri":"operator\/student\/{id}","methods":["GET","HEAD"]},"student_edit":{"uri":"operator\/student\/edit\/{id}","methods":["GET","HEAD"]},"student_update":{"uri":"operator\/student\/edit\/{id}","methods":["PUT"]},"student_delete":{"uri":"operator\/student\/{id}","methods":["DELETE"]},"teachers":{"uri":"operator\/teachers","methods":["GET","HEAD"]},"teacher_detail":{"uri":"operator\/teacher\/{id}","methods":["GET","HEAD"]},"teacher_edit":{"uri":"operator\/teacher\/edit\/{id}","methods":["GET","HEAD"]},"teacher_update":{"uri":"operator\/teacher\/edit\/{id}","methods":["PUT"]},"teacher_delete":{"uri":"operator\/teacher\/{id}","methods":["DELETE"]},"operator.revisi_data":{"uri":"operator\/revisi_data","methods":["GET","HEAD"]},"compare_revisi":{"uri":"operator\/compare_revisi\/{id}","methods":["GET","HEAD"]},"operator.school_id":{"uri":"operator\/identitas_sekolah","methods":["GET","HEAD"]},"operator.edit_schoolid":{"uri":"operator\/identitas_sekolah\/{id}","methods":["GET","HEAD"]},"operator.update_schoolid":{"uri":"operator\/identitas_sekolah\/{id}","methods":["PUT"]},"operator.siswa_kelas":{"uri":"operator\/siswa_kelas\/{id}","methods":["GET","HEAD"]},"teachers_page.input":{"uri":"guru\/input","methods":["GET","HEAD"]},"teachers.input_data":{"uri":"guru\/input","methods":["POST"]},"teachers.biodata":{"uri":"guru\/biodata","methods":["GET","HEAD"]},"teachers.edit":{"uri":"guru\/edit","methods":["GET","HEAD"]},"teachers.update":{"uri":"guru\/edit","methods":["PUT"]},"teachers.upload_dokumen":{"uri":"guru\/upload_dokumen","methods":["GET","HEAD"]},"teachers.tambah_pendidikan":{"uri":"guru\/tambah_pendidikan","methods":["GET","HEAD"]},"teachers.input_pendidikan":{"uri":"guru\/tambah_pendidikan","methods":["POST"]},"teachers.tambah_anak":{"uri":"guru\/tambah_anak","methods":["GET","HEAD"]},"teachers.input_anak":{"uri":"guru\/tambah_anak","methods":["POST"]},"teachers.tambah_diklat":{"uri":"guru\/tambah_diklat","methods":["GET","HEAD"]},"teachers.input_diklat":{"uri":"guru\/tambah_diklat","methods":["POST"]},"teachers.hapus_pendidikan":{"uri":"guru\/hapus_pendidikan\/{id}","methods":["DELETE"]},"teachers.hapus_diklat":{"uri":"guru\/hapus_diklat\/{id}","methods":["DELETE"]},"teachers.hapus_anak":{"uri":"guru\/hapus_anak\/{id}","methods":["DELETE"]},"journal_export":{"uri":"guru\/journal_export","methods":["GET","HEAD"]},"siswa.data":{"uri":"siswa\/data","methods":["GET","HEAD"]},"siswa_edit":{"uri":"siswa\/student\/edit","methods":["GET","HEAD"]},"siswa_update":{"uri":"siswa\/student\/edit","methods":["PUT"]},"siswa_prestasi":{"uri":"siswa\/prestasi","methods":["GET","HEAD"]},"siswa.input_prestasi":{"uri":"siswa\/input_prestasi","methods":["POST"]},"siswa.hapus_prestasi":{"uri":"siswa\/hapus_prestasi\/{id}","methods":["DELETE"]},"siswa.pengajuan_revisi":{"uri":"siswa\/pengajuan_revisi","methods":["GET","HEAD"]},"siswa.upload_dokumen":{"uri":"siswa\/upload_dokumen","methods":["GET","HEAD"]},"document.store":{"uri":"upload","methods":["POST"]},"keluar":{"uri":"keluar","methods":["GET","HEAD"]},"klaim_nis":{"uri":"klaim_nis","methods":["GET","HEAD"]},"input_klaim_nis":{"uri":"input_klaim_nis","methods":["POST"]},"tentukan_role":{"uri":"sebagai","methods":["GET","HEAD"]},"cek_nis":{"uri":"cek_nis","methods":["GET","HEAD"]},"login_guru_google":{"uri":"auth\/google_guru","methods":["GET","HEAD"]},"login_siswa_google":{"uri":"auth\/google_siswa","methods":["GET","HEAD"]},"ganti-pass":{"uri":"change-password","methods":["GET","HEAD"]},"change.password":{"uri":"change-password","methods":["POST"]},"ekskul.index":{"uri":"data_ekskul","methods":["GET","HEAD"]},"ekskul.create":{"uri":"pilih_ekskul","methods":["GET","HEAD"]},"ekskul.store":{"uri":"ekskul_post","methods":["POST"]},"ekskul.export":{"uri":"ekskul\/export","methods":["GET","HEAD"]},"ekskul.delete":{"uri":"ekskul\/delete\/{id}","methods":["DELETE"]},"munaqosah.store":{"uri":"daftar_munaqosah","methods":["POST"]},"munaqosah.show":{"uri":"penguji","methods":["GET","HEAD"]},"munaqosah.update":{"uri":"penguji","methods":["POST"]},"munaqosah.hasil":{"uri":"hasil_munaqosah","methods":["GET","HEAD"]},"munaqosah.cetak":{"uri":"cetak_sertifikat\/{id}\/{name}","methods":["GET","HEAD"]},"munaqosah.custom":{"uri":"custom_sertifika","methods":["POST"]},"munaqosah.exportAll":{"uri":"export_all_sertifikat","methods":["GET","HEAD"]},"inventaris.index":{"uri":"inventaris","methods":["GET","HEAD"]},"inventaris.store":{"uri":"inventaris","methods":["POST"]},"inventaris.details":{"uri":"inventaris\/{id}","methods":["GET","HEAD"]},"inventaris.edit":{"uri":"inventaris\/edit\/{id}","methods":["GET","HEAD"]},"inventaris.update":{"uri":"inventaris\/edit\/{id}","methods":["PUT"]},"inventaris.delete":{"uri":"inventaris\/{id}","methods":["DELETE"]},"presence.edit_jam":{"uri":"edit_jam","methods":["GET","HEAD"]},"presence.update_jam":{"uri":"update_jam","methods":["PUT"]},"presence.daterange":{"uri":"presence\/daterange","methods":["GET","HEAD"]},"presence.excel":{"uri":"presence\/exportExcel","methods":["GET","HEAD"]},"presence.monthly":{"uri":"presence\/monthly","methods":["GET","HEAD"]},"presence.index":{"uri":"presence","methods":["GET","HEAD"]},"presence.create":{"uri":"presence\/create","methods":["GET","HEAD"]},"presence.store":{"uri":"presence","methods":["POST"]},"presence.show":{"uri":"presence\/{presence}","methods":["GET","HEAD"]},"presence.edit":{"uri":"presence\/{presence}\/edit","methods":["GET","HEAD"]},"presence.update":{"uri":"presence\/{presence}","methods":["PUT","PATCH"]},"presence.destroy":{"uri":"presence\/{presence}","methods":["DELETE"]},"qrcode.update":{"uri":"qrcode\/update","methods":["POST"]},"admin.acara.index":{"uri":"admin\/acara\/index","methods":["GET","HEAD"]},"admin.kategori-acara.index":{"uri":"admin\/kategori-acara\/index","methods":["GET","HEAD"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };