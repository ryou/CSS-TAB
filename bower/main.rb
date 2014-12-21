require 'json'

script_dir = File.expand_path(File.dirname($0))

JSON_FILE_PATH = script_dir + '/config.json'
COMP_PATH = script_dir +'/bower_components' # bower_componentsのパス
SRC_PATH = script_dir + '/../source' # 静的サイトのソースファイルが置かれているディレクトリ

json_data = open(JSON_FILE_PATH) do |io|
  JSON.load(io)
end

if json_data.length > 0
  print `mkdir #{SRC_PATH}/lib`
  json_data.each do |lib_name, cp_dirs|
    print `mkdir #{SRC_PATH}/lib/#{lib_name}`
    cp_dirs.each do |dest_dir, src_dir|
      print `mkdir #{SRC_PATH}/lib/#{lib_name}/#{dest_dir}`
      print `cp #{COMP_PATH}/#{lib_name}/#{src_dir} #{SRC_PATH}/lib/#{lib_name}/#{dest_dir}/`
    end
  end
end
