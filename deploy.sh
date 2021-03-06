#!/bin/bash

PROJECT_BASE_PATH=./src
TMP_FILE_PATH=$PROJECT_BASE_PATH"/Temp"
readonly TMP_FILE_PATH
PROTO_FILE_PATH=$PROJECT_BASE_PATH"/Proto"

# protobuf pool
#PROTOBUF_POOL=("Qpm" "Product" "Finance")

CleanOldFile() {
  _curt_file=$PROJECT_BASE_PATH"/"$1
  if [ -e  $_curt_file ];then
    rm -rf $_curt_file
  fi
}

GenerateGrpcCode() {
  _proto_file_path=$PROTO_FILE_PATH"/"$2
  _generate_file_path=$TMP_FILE_PATH"/Yinge/Grpc/"$1
  protoc --proto_path=$PROTO_FILE_PATH --php_out=$TMP_FILE_PATH --grpc_out=$TMP_FILE_PATH --plugin=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin $_proto_file_path

  if [ ! -e $_generate_file_path ];then
    echo $_generate_file_path
    echo "failed to generate $1 grpc code"
    exit 2
  fi

  cp -R $_generate_file_path $PROJECT_BASE_PATH
}

# check temp file
if [ ! -e $TMP_FILE_PATH ];then
    mkdir $TMP_FILE_PATH
fi

# remove old file && generate new file
for item in ${PROTO_FILE_PATH}/*; do
  _pb_file=${item##*Proto/}

  _dir=${_pb_file%*.proto}
  # 有下划线就都放一起
  _dir=${_dir%_*}
  # 首字母大写
  _dir="$(tr '[:lower:]' '[:upper:]' <<< ${_dir:0:1})${_dir:1}"

  CleanOldFile $_dir
  GenerateGrpcCode $_dir $_pb_file
done

## clean
rm -r $TMP_FILE_PATH
