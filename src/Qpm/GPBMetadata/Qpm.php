<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: qpm.proto

namespace Yinge\Grpc\Qpm\GPBMetadata;

class Qpm
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0abf450a0971706d2e70726f746f120351706d22250a1350726f64756365436865636b52657175657374120e0a06736b7549647318012003280322bb020a1450726f64756365436865636b526573706f6e7365120c0a04636f646518012001280312370a07726573756c747318022003280b32262e51706d2e50726f64756365436865636b526573706f6e73652e526573756c7473456e747279120e0a066572724d73671803200128091a770a09436865636b4974656d120d0a05736b754964180120012803120f0a07736b754e616d65180220012809120f0a07666163746f7279180320012808120f0a076578707265737318042001280812130a0b70726f64756365436f737418052001280812130a0b65787072657373436f73741806200128081a530a0c526573756c7473456e747279120b0a036b657918012001280312320a0576616c756518022001280b32232e51706d2e50726f64756365436865636b526573706f6e73652e436865636b4974656d3a02380122230a11536b7550726f64756365496e666f526571120e0a06736b7549647318012003280322240a125370754361706163697479496e666f526571120e0a0673707549647318012003280322390a0e536b7550726f6475636552657370120c0a04636f6465180120012805120b0a036d7367180220012809120c0a0464617461180320012809221f0a0a5370754c69737452657112110a09666163746f7279496418012001280322390a12466163746f727950726f647563655265737012230a056974656d7318012003280b32142e51706d2e50726f647563655370754f72536b75222e0a0a536b754c69737452657112110a09666163746f72794964180120012803120d0a057370754964180220012803222b0a0f50726f647563655370754f72536b75120a0a026964180120012803120c0a046e616d65180220012809227a0a084d4c697374526571120c0a047061676518012001280312100a087061676553697a65180220012803120d0a057370754964180320012803120d0a05736b754964180420012803120f0a076b6579776f726418052001280912110a09666163746f72794964180620012803120c0a0474696d65180720012809223c0a094d4c6973745265737012200a056974656d7318012003280b32112e51706d2e426173654d6174657269656c120d0a05746f74616c18022001280322a7010a0c426173654d6174657269656c120a0a026964180120012803120c0a04636f6465180220012809120c0a046e616d6518032001280912160a0e73746f636b5468726573686f6c6418042001280312120a0a73746f636b546f74616c18052001280312170a0f79696e676553746f7265546f74616c18062001280312190a11666163746f727953746f7265546f74616c180720012803120f0a07636f6e73756d651808200128032292010a1053746f72654d6174657269656c526571120c0a046d69647318012003280312100a0873746f72654e756d18022001280312110a0973746f726554797065180320012805120c0a046365727418042001280912110a09666163746f7279496418052001280312110a0973746f636b5479706518062001280312170a0f72656c6174696f6e436865636b496418072001280322190a06534d44526571120f0a07636865636b496418012001280322330a114d6174657269656c44657461696c526571120b0a036d696418012001280312110a09666163746f7279496418022001280322350a124d6174657269656c44657461696c52657370121f0a046974656d18012001280b32112e51706d2e426173654d6174657269656c22e0010a07534d4452657370120b0a036d696418012001280312110a09666163746f7279496418022001280312100a0873746f72654e756d18032001280312110a0973746f72655479706518042001280312110a0973746f636b54797065180520012803120a0a026964180620012803120f0a07636865636b496418072001280312180a106265666f726559696e676553746f636b18082001280312170a0f616674657259696e676553746f636b18092001280312160a0e6265666f726553636d53746f636b180a2001280312150a0d616674657253636d53746f636b180b2001280322ba010a06534d48526571120c0a047061676518012001280312100a087061676553697a65180220012803120d0a057370754964180320012803120f0a0773746172744174180420012809120d0a05656e64417418052001280912110a09666163746f72794964180620012803120b0a036d6964180720012803120e0a0673746174757318082001280312170a0f72656c6174696f6e436865636b496418092001280312180a1072656d6f766552656c6174696f6e4964180a2001280822410a07534d485265737012270a056974656d7318012003280b32182e51706d2e426173654d6174657269656c486973746f7279120d0a05746f74616c18022001280322bb020a13426173654d6174657269656c486973746f7279120a0a026964180120012803120b0a036d696418022001280312110a09666163746f7279496418032001280312100a0873746f72654e756d18042001280312110a0973746f726554797065180520012803120c0a046365727418062001280912180a106265666f726553746f7265546f74616c18072001280312170a0f616674657253746f7265546f74616c18082001280312240a096d6174657269656c7318092001280b32112e51706d2e426173654d6174657269656c12110a09637265617465644174180a2001280912110a0973746f636b54797065180b20012803120e0a06726561736f6e180c20012809120e0a06737461747573180d2001280312120a0a636f6d6d697454797065180e2001280312120a0a72656c6174696f6e4964180f20012803223d0a15466163746f7279457870726573735265717565737412110a09666163746f7279496418012001280512110a0970726f64756374496418022001280522530a16466163746f727945787072657373526573706f6e7365120d0a05636f756e74180120012805122a0a0965787072657373657318022003280b32172e51706d2e466163746f7279457870726573734974656d224d0a12466163746f7279457870726573734974656d120f0a0765787072657373180120012809120c0a04636f6465180220012809120c0a0472617465180320012805120a0a026964180420012805224a0a1350726f6475636552756c65735265717565737412110a09666163746f7279496418012001280512110a0970726f647563744964180220012805120d0a05736b754964180320012805224a0a1450726f6475636552756c6573526573706f6e7365120d0a05636f756e7418012001280512230a0572756c657318022003280b32142e51706d2e50726f6475636552756c654974656d226c0a0f50726f6475636552756c654974656d12110a09666163746f7279496418012001280512110a0970726f647563744964180220012805120d0a05736b75496418032001280512140a0c6973496e6974696174697665180420012808120e0a06697353746f7018052001280822250a12547279446973706174636852657175657374120f0a076f72646572496418012001280322420a1a42617463685570646174654d65726368616e745265717565737412100a086f7264657249647318012001280912120a0a6d65726368616e74496418022001280322570a135472794469737061746368526573706f6e736512110a09666163746f7279496418012001280512160a0e65787072657373436f6d70616e7918022001280912150a0d657870726573734e756d62657218032001280922170a09496452657175657374120a0a02696418012001280522600a15537570706f7274466163746f727952657175657374120a0a026964180120012805121a0a126f6e6c7950726f64756365456e61626c6564180220012808121f0a176f6e6c794175746f4469737061746368456e61626c6564180320012808225d0a165570646174654f726465724974656d52657175657374120f0a076f72646572496418012001280512240a0b70726f647563744c69737418022001280b320f2e51706d2e4f726465724974656d73120c0a047075736818032001280822560a104469737061746368526573706f6e7365120c0a04636f6465180120012805120b0a036d736718022001280912110a09666163746f7279496418032001280512140a0c64656c6976657279496e666f18042001280922390a16537570706f7274466163746f7279526573706f6e7365121f0a0572756c657318012003280b32102e51706d2e466163746f727952756c65227c0a0b466163746f727952756c65120d0a05736b75496418012001280512110a09666163746f7279496418022001280512130a0b666163746f72794e616d65180320012809120c0a047261746518042001280212130a0b70726f64756365436f646518052001280912130a0b70726f647563654e616d6518062001280922fa010a094f72646572496e666f120f0a076f72646572496418012001280512110a097061636b616765496418022001280512110a09666163746f7279496418032001280512130a0b61646472657373496e666f18042001280912130a0b65787072657373496e666f18062001280912240a0b70726f647563744c69737418052001280b320f2e51706d2e4f726465724974656d73120a0a02696418072001280512120a0a64656c697665725f696418082001280512150a0d70726f64756365537461747573180920012805120d0a056578747261180a20012809120f0a07657874656e6473180b20012809120f0a0770726574656e64180c2001280522460a124f7264657243616e63656c52657175657374120f0a076f726465724964180120012805121f0a086f70657261746f7218032001280b320d2e51706d2e4f70657261746f7222a2010a194f72646572466163746f72794368616e67655265717565737412100a086f7264657249647318012001280912170a0f6f726967696e466163746f7279496418022001280512140a0c6e6577466163746f7279496418032001280512130a0b6973436f756e74436f7374180420012805120e0a06726561736f6e180520012809121f0a086f70657261746f7218062001280b320d2e51706d2e4f70657261746f72224f0a1a4f72646572466163746f72794368616e6765526573706f6e7365120c0a04636f6465180120012805120b0a036d736718022001280912160a0e6661696c65644f7264657249647318032001280922a1010a1a4f72646572457870726573735265706c61636552657175657374120f0a076f72646572496418012001280512130a0b65787072657373436f646518022001280912110a09657870726573734e6f180320012809121f0a086f70657261746f7218042001280b320d2e51706d2e4f70657261746f7212100a086272616e6368496418052001280512170a0f77617962696c6c50726f766964657218062001280522590a084f70657261746f7212170a0f6f7065726174696f6e55736572496418012001280512190a116f7065726174696f6e557365725479706518022001280512190a116f7065726174696f6e557365724e616d65180320012809222b0a0a4f726465724974656d73121d0a056974656d7318012003280b320e2e51706d2e4f726465724974656d223d0a094f726465724974656d12110a0970726f647563654964180120012805120d0a05736b754964180220012805120e0a0664657461696c1803200128092280010a1153796e6353746174757352657175657374120f0a076f72646572496418012001280512130a0b6f7264657253746174757318022001280512150a0d70726f6475636553746174757318032001280512160a0e7368697070696e6753746174757318042001280512160a0e64656c697665727953746174757318052001280522250a08526573706f6e7365120c0a04636f6465180120012805120b0a036d736718022001280922360a1450726f6475637453656172636852657175657374120a0a02696418012001280512120a0a7365617263685479706518022001280522760a1550726f64756374536561726368526573706f6e7365120c0a04636f6465180120012805120b0a036d736718022001280912220a0a67726f75704974656d7318032003280b320e2e51706d2e47726f75704974656d121e0a08736b754974656d7318042003280b320c2e51706d2e536b754974656d224e0a1053636d4f72646572526573706f6e7365120c0a04636f6465180120012805120b0a036d7367180220012809121f0a0873636d4f7264657218032001280b320d2e51706d2e53636d4f7264657222a4010a0853636d4f72646572120a0a026964180120012805120f0a076f72646572496418022001280512110a097061636b696e67496418032001280512110a0964656c69766572496418042001280512110a09666163746f7279496418052001280512180a1070726f64756374696f6e53746174757318062001280512130a0b6f7264657253746174757318072001280512130a0b61646472657373496e666f18082001280922250a0947726f75704974656d120a0a026964180120012805120c0a046e616d65180220012809227a0a07536b754974656d120a0a026964180120012805120c0a046e616d65180220012809120d0a05707269636518032001280912120a0a636f766572496d616765180420012809120e0a06737461747573180520012805120f0a0767726f7570496418062001280512110a0967726f75704e616d6518072001280922530a14536f7274696e674261746368526573706f6e7365120c0a04636f6465180120012805120b0a036d736718022001280912200a05626174636818032001280b32112e51706d2e536f7274696e67426174636822640a0c536f7274696e674261746368120f0a0762617463684964180120012805120f0a0762617463684e6f18022001280912180a1070726f64756365466163746f7279496418032001280512180a10736f7274696e67466163746f7279496418042001280522610a0a4f726465724576656e74120f0a076f72646572496418012001280512110a096576656e7454797065180220012809120e0a06706172616d73180320012809121f0a086f70657261746f7218042001280b320d2e51706d2e4f70657261746f7222720a0d5368697070696e675472616365120e0a066d61696c4e6f180120012809121c0a146c6f67697374696373476d744d6f646966696564180220012809121a0a126c6173744c6f67697374696344657461696c18032001280912170a0f6c6f6769737469637353746174757318042001280922f6010a155375624163636f756e74417574685265717565737412110a09666163746f72794964180120012805120e0a06726f6c654964180220012805120c0a046e616d6518032001280912140a0c7375624163636f756e744964180420012805120f0a076175746849647318052003280512100a0866756e634e616d65180620012809120d0a0570686f6e65180720012809120f0a0763617074636861180820012809120c0a047061676518092001280512100a087061676553697a65180a2001280512100a086e69636b6e616d65180b2001280912100a086c69737456696577180c20012808120f0a076368616e6e656c180d20012809224d0a125375624163636f756e74526573706f6e7365120c0a04636f6465180120012805120b0a036d7367180220012809120e0a06726573756c74180320012808120c0a046461746118042001280922240a13536b75436f7374436865636b52657175657374120d0a05736b75496418012001280522310a14536b75436f7374436865636b526573706f6e7365120c0a04636f6465180120012805120b0a036d736718022001280922280a15536b75436f6e666967436865636b52657175657374120f0a07736b7544617461180120012809224d0a16536b75436f6e666967436865636b526573706f6e7365121f0a08726573706f6e736518012001280b320d2e51706d2e526573706f6e736512120a0a657272536b754461746118022001280922180a164465666563746976655365617263685265717565737422450a14446566656374697665537075526573706f6e7365121f0a08726573706f6e736518012001280b320d2e51706d2e526573706f6e7365120c0a046461746118022001280922560a11436f7374536574746c6552657175657374120f0a076f72646572496418012001280512180a10757365496e50726f6475636554696d6518022001280812160a0e75736543757272656e7454696d6518032001280822570a154f72646572436f737451756572795265717565737412190a1170726f64756374696f6e4f72646572496418012001280512100a08636f73745479706518022001280512110a09666163746f7279496418032001280522d6010a0f4f72646572436f737444657461696c12110a09666163746f7279496418012001280512190a1170726f64756374696f6e4f72646572496418022001280512100a0873636d536b75496418032001280512170a0f657870726573734272616e6368496418042001280512100a0870726f76696e636518052001280912130a0b636f737453756254797065180620012805120c0a04636f737418072001280212110a09736574746c65644174180820012805120f0a076861735061696418092001280512110a09637265617465644174180a2001280522450a184f72646572436f737444657461696c73526573706f6e736512290a0b636f737444657461696c7318012003280b32142e51706d2e4f72646572436f737444657461696c329f120a0a51706d5365727669636512340a0946696e644f72646572120e2e51706d2e4f72646572496e666f1a152e51706d2e53636d4f72646572526573706f6e7365220012360a0b4372656174654f72646572120e2e51706d2e4f72646572496e666f1a152e51706d2e4469737061746368526573706f6e73652200123a0a0f53796e634f7264657253746174757312162e51706d2e53796e63537461747573526571756573741a0d2e51706d2e526573706f6e7365220012300a0d55706461746541646472657373120e2e51706d2e4f72646572496e666f1a0d2e51706d2e526573706f6e7365220012370a0b43616e63656c4f7264657212172e51706d2e4f7264657243616e63656c526571756573741a0d2e51706d2e526573706f6e7365220012570a124368616e67654f72646572466163746f7279121e2e51706d2e4f72646572466163746f72794368616e6765526571756573741a1f2e51706d2e4f72646572466163746f72794368616e6765526573706f6e7365220012470a135265706c6163654f7264657245787072657373121f2e51706d2e4f72646572457870726573735265706c616365526571756573741a0d2e51706d2e526573706f6e7365220012420a07476574536b757312192e51706d2e50726f64756374536561726368526571756573741a1a2e51706d2e50726f64756374536561726368526573706f6e7365220012470a0c476574536b7547726f75707312192e51706d2e50726f64756374536561726368526571756573741a1a2e51706d2e50726f64756374536561726368526573706f6e7365220012470a0c476574536b7544657461696c12192e51706d2e50726f64756374536561726368526571756573741a1a2e51706d2e50726f64756374536561726368526573706f6e73652200124b0a0e537570706f7274466163746f7279121a2e51706d2e537570706f7274466163746f7279526571756573741a1b2e51706d2e537570706f7274466163746f7279526573706f6e73652200123e0a0f476574536f7274696e674261746368120e2e51706d2e4f72646572496e666f1a192e51706d2e536f7274696e674261746368526573706f6e7365220012320a0e507573684f726465724576656e74120f2e51706d2e4f726465724576656e741a0d2e51706d2e526573706f6e73652200123a0a135368697070696e67547261636555706461746512122e51706d2e5368697070696e6754726163651a0d2e51706d2e526573706f6e7365220012470a1054727944697370617463684f7264657212172e51706d2e5472794469737061746368526571756573741a182e51706d2e5472794469737061746368526573706f6e73652200123f0a0f5570646174654f726465724974656d121b2e51706d2e5570646174654f726465724974656d526571756573741a0d2e51706d2e526573706f6e7365220012470a0e5375624163636f756e7441757468121a2e51706d2e5375624163636f756e7441757468526571756573741a172e51706d2e5375624163636f756e74526573706f6e7365220012450a0c50726f64756365436865636b12182e51706d2e50726f64756365436865636b526571756573741a192e51706d2e50726f64756365436865636b526573706f6e7365220012450a0c436865636b536b75436f737412182e51706d2e536b75436f7374436865636b526571756573741a192e51706d2e536b75436f7374436865636b526573706f6e73652200124c0a0f436865636b536b75436f6e66696773121a2e51706d2e536b75436f6e666967436865636b526571756573741a1b2e51706d2e536b75436f6e666967436865636b526573706f6e7365220012450a0c50726f6475636552756c657312182e51706d2e50726f6475636552756c6573526571756573741a192e51706d2e50726f6475636552756c6573526573706f6e73652200124b0a0e466163746f727945787072657373121a2e51706d2e466163746f727945787072657373526571756573741a1b2e51706d2e466163746f727945787072657373526573706f6e7365220012420a11476574536b7550726f64756365496e666f12162e51706d2e536b7550726f64756365496e666f5265711a132e51706d2e536b7550726f6475636552657370220012440a124765745370754361706163697479496e666f12172e51706d2e5370754361706163697479496e666f5265711a132e51706d2e536b7550726f64756365526573702200124d0a0e676574436f737444657461696c73121a2e51706d2e4f72646572436f73745175657279526571756573741a1d2e51706d2e4f72646572436f737444657461696c73526573706f6e7365220012360a0b436f7374536574746c656412162e51706d2e436f7374536574746c65526571756573741a0d2e51706d2e526573706f6e73652200122f0a0c4d6174657269656c4c697374120d2e51706d2e4d4c6973745265711a0e2e51706d2e4d4c69737452657370220012430a0e4d6174657269656c44657461696c12162e51706d2e4d6174657269656c44657461696c5265711a172e51706d2e4d6174657269656c44657461696c52657370220012370a0d53746f72654d6174657269656c12152e51706d2e53746f72654d6174657269656c5265711a0d2e51706d2e526573706f6e7365220012330a1453746f72654d6174657269656c486973746f7279120b2e51706d2e534d485265711a0c2e51706d2e534d4852657370220012320a1353746f72654d6174657269656c44657461696c120b2e51706d2e534d445265711a0c2e51706d2e534d4452657370220012430a15466163746f727950726f647563655370754c697374120f2e51706d2e5370754c6973745265711a172e51706d2e466163746f727950726f6475636552657370220012430a15466163746f727950726f64756365536b754c697374120f2e51706d2e536b754c6973745265711a172e51706d2e466163746f727950726f64756365526573702200124e0a12476574546f70446566656374697665537075121b2e51706d2e446566656374697665536561726368526571756573741a192e51706d2e446566656374697665537075526573706f6e7365220012410a0d4669784d65726368616e744964121f2e51706d2e42617463685570646174654d65726368616e74526571756573741a0d2e51706d2e526573706f6e73652200422eca020e59696e67655c477270635c51706de2021a59696e67655c477270635c51706d5c4750424d65746164617461620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

