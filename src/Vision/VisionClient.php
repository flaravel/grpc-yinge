<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Yinge\Grpc\Vision;

/**
 */
class VisionClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * ---- 渲染中心(RenderCenter) -----
     *
     * 预览模板
     * @param \Yinge\Grpc\Vision\RCPreviewRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RCPreview(\Yinge\Grpc\Vision\RCPreviewRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Vision.Vision/RCPreview',
        $argument,
        ['\Yinge\Grpc\Vision\RCPreviewResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 保存模板
     * @param \Yinge\Grpc\Vision\RCSaveRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RCSave(\Yinge\Grpc\Vision\RCSaveRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Vision.Vision/RCSave',
        $argument,
        ['\Yinge\Grpc\Vision\EmptyResp', 'decode'],
        $metadata, $options);
    }

    /**
     * 生成预览图
     * @param \Yinge\Grpc\Vision\RCGenerateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RCGenerate(\Yinge\Grpc\Vision\RCGenerateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Vision.Vision/RCGenerate',
        $argument,
        ['\Yinge\Grpc\Vision\RCGenerateResponse', 'decode'],
        $metadata, $options);
    }

}
