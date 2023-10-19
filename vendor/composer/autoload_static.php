<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit03bab38e7d5f05d62c02910a3c8448a4
{
    public static $files = array (
        '3917c79c5052b270641b5a200963dbc2' => __DIR__ . '/..' . '/kint-php/kint/init.php',
    );

    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kint\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kint\\' => 
        array (
            0 => __DIR__ . '/..' . '/kint-php/kint/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Kint\\CallFinder' => __DIR__ . '/..' . '/kint-php/kint/src/CallFinder.php',
        'Kint\\FacadeInterface' => __DIR__ . '/..' . '/kint-php/kint/src/FacadeInterface.php',
        'Kint\\Kint' => __DIR__ . '/..' . '/kint-php/kint/src/Kint.php',
        'Kint\\Parser\\AbstractPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/AbstractPlugin.php',
        'Kint\\Parser\\ArrayLimitPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/ArrayLimitPlugin.php',
        'Kint\\Parser\\ArrayObjectPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/ArrayObjectPlugin.php',
        'Kint\\Parser\\Base64Plugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Base64Plugin.php',
        'Kint\\Parser\\BinaryPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/BinaryPlugin.php',
        'Kint\\Parser\\BlacklistPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/BlacklistPlugin.php',
        'Kint\\Parser\\ClassMethodsPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/ClassMethodsPlugin.php',
        'Kint\\Parser\\ClassStaticsPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/ClassStaticsPlugin.php',
        'Kint\\Parser\\ClosurePlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/ClosurePlugin.php',
        'Kint\\Parser\\ColorPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/ColorPlugin.php',
        'Kint\\Parser\\ConstructablePluginInterface' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/ConstructablePluginInterface.php',
        'Kint\\Parser\\DOMDocumentPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/DOMDocumentPlugin.php',
        'Kint\\Parser\\DateTimePlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/DateTimePlugin.php',
        'Kint\\Parser\\EnumPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/EnumPlugin.php',
        'Kint\\Parser\\FsPathPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/FsPathPlugin.php',
        'Kint\\Parser\\IteratorPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/IteratorPlugin.php',
        'Kint\\Parser\\JsonPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/JsonPlugin.php',
        'Kint\\Parser\\MicrotimePlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/MicrotimePlugin.php',
        'Kint\\Parser\\MysqliPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/MysqliPlugin.php',
        'Kint\\Parser\\Parser' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Parser.php',
        'Kint\\Parser\\PluginInterface' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/PluginInterface.php',
        'Kint\\Parser\\ProxyPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/ProxyPlugin.php',
        'Kint\\Parser\\SerializePlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/SerializePlugin.php',
        'Kint\\Parser\\SimpleXMLElementPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/SimpleXMLElementPlugin.php',
        'Kint\\Parser\\SplFileInfoPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/SplFileInfoPlugin.php',
        'Kint\\Parser\\SplObjectStoragePlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/SplObjectStoragePlugin.php',
        'Kint\\Parser\\StreamPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/StreamPlugin.php',
        'Kint\\Parser\\TablePlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/TablePlugin.php',
        'Kint\\Parser\\ThrowablePlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/ThrowablePlugin.php',
        'Kint\\Parser\\TimestampPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/TimestampPlugin.php',
        'Kint\\Parser\\ToStringPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/ToStringPlugin.php',
        'Kint\\Parser\\TracePlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/TracePlugin.php',
        'Kint\\Parser\\XmlPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/XmlPlugin.php',
        'Kint\\Renderer\\AbstractRenderer' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/AbstractRenderer.php',
        'Kint\\Renderer\\CliRenderer' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/CliRenderer.php',
        'Kint\\Renderer\\PlainRenderer' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/PlainRenderer.php',
        'Kint\\Renderer\\RendererInterface' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/RendererInterface.php',
        'Kint\\Renderer\\RichRenderer' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/RichRenderer.php',
        'Kint\\Renderer\\Rich\\AbstractPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/AbstractPlugin.php',
        'Kint\\Renderer\\Rich\\ArrayLimitPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/ArrayLimitPlugin.php',
        'Kint\\Renderer\\Rich\\BinaryPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/BinaryPlugin.php',
        'Kint\\Renderer\\Rich\\BlacklistPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/BlacklistPlugin.php',
        'Kint\\Renderer\\Rich\\CallablePlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/CallablePlugin.php',
        'Kint\\Renderer\\Rich\\ClosurePlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/ClosurePlugin.php',
        'Kint\\Renderer\\Rich\\ColorPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/ColorPlugin.php',
        'Kint\\Renderer\\Rich\\DepthLimitPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/DepthLimitPlugin.php',
        'Kint\\Renderer\\Rich\\MethodDefinitionPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/MethodDefinitionPlugin.php',
        'Kint\\Renderer\\Rich\\MicrotimePlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/MicrotimePlugin.php',
        'Kint\\Renderer\\Rich\\PluginInterface' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/PluginInterface.php',
        'Kint\\Renderer\\Rich\\RecursionPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/RecursionPlugin.php',
        'Kint\\Renderer\\Rich\\SimpleXMLElementPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/SimpleXMLElementPlugin.php',
        'Kint\\Renderer\\Rich\\SourcePlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/SourcePlugin.php',
        'Kint\\Renderer\\Rich\\TabPluginInterface' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/TabPluginInterface.php',
        'Kint\\Renderer\\Rich\\TablePlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/TablePlugin.php',
        'Kint\\Renderer\\Rich\\TimestampPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/TimestampPlugin.php',
        'Kint\\Renderer\\Rich\\TraceFramePlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/TraceFramePlugin.php',
        'Kint\\Renderer\\Rich\\ValuePluginInterface' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/ValuePluginInterface.php',
        'Kint\\Renderer\\TextRenderer' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/TextRenderer.php',
        'Kint\\Renderer\\Text\\AbstractPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Text/AbstractPlugin.php',
        'Kint\\Renderer\\Text\\ArrayLimitPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Text/ArrayLimitPlugin.php',
        'Kint\\Renderer\\Text\\BlacklistPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Text/BlacklistPlugin.php',
        'Kint\\Renderer\\Text\\DepthLimitPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Text/DepthLimitPlugin.php',
        'Kint\\Renderer\\Text\\EnumPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Text/EnumPlugin.php',
        'Kint\\Renderer\\Text\\MicrotimePlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Text/MicrotimePlugin.php',
        'Kint\\Renderer\\Text\\PluginInterface' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Text/PluginInterface.php',
        'Kint\\Renderer\\Text\\RecursionPlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Text/RecursionPlugin.php',
        'Kint\\Renderer\\Text\\TracePlugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Text/TracePlugin.php',
        'Kint\\Utils' => __DIR__ . '/..' . '/kint-php/kint/src/Utils.php',
        'Kint\\Zval\\BlobValue' => __DIR__ . '/..' . '/kint-php/kint/src/Zval/BlobValue.php',
        'Kint\\Zval\\ClosureValue' => __DIR__ . '/..' . '/kint-php/kint/src/Zval/ClosureValue.php',
        'Kint\\Zval\\DateTimeValue' => __DIR__ . '/..' . '/kint-php/kint/src/Zval/DateTimeValue.php',
        'Kint\\Zval\\EnumValue' => __DIR__ . '/..' . '/kint-php/kint/src/Zval/EnumValue.php',
        'Kint\\Zval\\InstanceValue' => __DIR__ . '/..' . '/kint-php/kint/src/Zval/InstanceValue.php',
        'Kint\\Zval\\MethodValue' => __DIR__ . '/..' . '/kint-php/kint/src/Zval/MethodValue.php',
        'Kint\\Zval\\ParameterHoldingTrait' => __DIR__ . '/..' . '/kint-php/kint/src/Zval/ParameterHoldingTrait.php',
        'Kint\\Zval\\ParameterValue' => __DIR__ . '/..' . '/kint-php/kint/src/Zval/ParameterValue.php',
        'Kint\\Zval\\Representation\\ColorRepresentation' => __DIR__ . '/..' . '/kint-php/kint/src/Zval/Representation/ColorRepresentation.php',
        'Kint\\Zval\\Representation\\MethodDefinitionRepresentation' => __DIR__ . '/..' . '/kint-php/kint/src/Zval/Representation/MethodDefinitionRepresentation.php',
        'Kint\\Zval\\Representation\\MicrotimeRepresentation' => __DIR__ . '/..' . '/kint-php/kint/src/Zval/Representation/MicrotimeRepresentation.php',
        'Kint\\Zval\\Representation\\Representation' => __DIR__ . '/..' . '/kint-php/kint/src/Zval/Representation/Representation.php',
        'Kint\\Zval\\Representation\\SourceRepresentation' => __DIR__ . '/..' . '/kint-php/kint/src/Zval/Representation/SourceRepresentation.php',
        'Kint\\Zval\\Representation\\SplFileInfoRepresentation' => __DIR__ . '/..' . '/kint-php/kint/src/Zval/Representation/SplFileInfoRepresentation.php',
        'Kint\\Zval\\ResourceValue' => __DIR__ . '/..' . '/kint-php/kint/src/Zval/ResourceValue.php',
        'Kint\\Zval\\SimpleXMLElementValue' => __DIR__ . '/..' . '/kint-php/kint/src/Zval/SimpleXMLElementValue.php',
        'Kint\\Zval\\StreamValue' => __DIR__ . '/..' . '/kint-php/kint/src/Zval/StreamValue.php',
        'Kint\\Zval\\ThrowableValue' => __DIR__ . '/..' . '/kint-php/kint/src/Zval/ThrowableValue.php',
        'Kint\\Zval\\TraceFrameValue' => __DIR__ . '/..' . '/kint-php/kint/src/Zval/TraceFrameValue.php',
        'Kint\\Zval\\TraceValue' => __DIR__ . '/..' . '/kint-php/kint/src/Zval/TraceValue.php',
        'Kint\\Zval\\Value' => __DIR__ . '/..' . '/kint-php/kint/src/Zval/Value.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit03bab38e7d5f05d62c02910a3c8448a4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit03bab38e7d5f05d62c02910a3c8448a4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit03bab38e7d5f05d62c02910a3c8448a4::$classMap;

        }, null, ClassLoader::class);
    }
}