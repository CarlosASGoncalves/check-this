<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb07c6b2ac2b0c03e801f52367d7d12cb
{
    public static $files = array (
        '5ec26a44593cffc3089bdca7ce7a56c3' => __DIR__ . '/../..' . '/core/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Acme\\Tester' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Processor/IntrospectionProcessorTest.php',
        'App\\Controllers\\ContactController' => __DIR__ . '/../..' . '/app/controllers/ContactController.php',
        'App\\Controllers\\FileManagementController' => __DIR__ . '/../..' . '/app/controllers/FileManagementController.php',
        'App\\Controllers\\LoginController' => __DIR__ . '/../..' . '/app/controllers/LoginController.php',
        'App\\Controllers\\Pagescontroller' => __DIR__ . '/../..' . '/app/controllers/Pagescontroller.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/app/controllers/UsersController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Database\\Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'App\\Core\\Database\\QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'App\\Models\\Mailer' => __DIR__ . '/../..' . '/app/models/Mailer.php',
        'App\\Models\\User' => __DIR__ . '/../..' . '/app/models/User.php',
        'ComposerAutoloaderInitb07c6b2ac2b0c03e801f52367d7d12cb' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitb07c6b2ac2b0c03e801f52367d7d12cb' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Monolog\\ErrorHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/ErrorHandler.php',
        'Monolog\\ErrorHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/ErrorHandlerTest.php',
        'Monolog\\Formatter\\ChromePHPFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/ChromePHPFormatter.php',
        'Monolog\\Formatter\\ChromePHPFormatterTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Formatter/ChromePHPFormatterTest.php',
        'Monolog\\Formatter\\ElasticaFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/ElasticaFormatter.php',
        'Monolog\\Formatter\\ElasticaFormatterTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Formatter/ElasticaFormatterTest.php',
        'Monolog\\Formatter\\FlowdockFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/FlowdockFormatter.php',
        'Monolog\\Formatter\\FlowdockFormatterTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Formatter/FlowdockFormatterTest.php',
        'Monolog\\Formatter\\FluentdFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/FluentdFormatter.php',
        'Monolog\\Formatter\\FluentdFormatterTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Formatter/FluentdFormatterTest.php',
        'Monolog\\Formatter\\FormatterInterface' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/FormatterInterface.php',
        'Monolog\\Formatter\\GelfMessageFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/GelfMessageFormatter.php',
        'Monolog\\Formatter\\GelfMessageFormatterTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Formatter/GelfMessageFormatterTest.php',
        'Monolog\\Formatter\\HtmlFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/HtmlFormatter.php',
        'Monolog\\Formatter\\JsonFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/JsonFormatter.php',
        'Monolog\\Formatter\\JsonFormatterTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Formatter/JsonFormatterTest.php',
        'Monolog\\Formatter\\LineFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/LineFormatter.php',
        'Monolog\\Formatter\\LineFormatterTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Formatter/LineFormatterTest.php',
        'Monolog\\Formatter\\LogglyFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/LogglyFormatter.php',
        'Monolog\\Formatter\\LogglyFormatterTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Formatter/LogglyFormatterTest.php',
        'Monolog\\Formatter\\LogstashFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/LogstashFormatter.php',
        'Monolog\\Formatter\\LogstashFormatterTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Formatter/LogstashFormatterTest.php',
        'Monolog\\Formatter\\MongoDBFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/MongoDBFormatter.php',
        'Monolog\\Formatter\\MongoDBFormatterTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Formatter/MongoDBFormatterTest.php',
        'Monolog\\Formatter\\NormalizerFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/NormalizerFormatter.php',
        'Monolog\\Formatter\\NormalizerFormatterTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Formatter/NormalizerFormatterTest.php',
        'Monolog\\Formatter\\ScalarFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/ScalarFormatter.php',
        'Monolog\\Formatter\\ScalarFormatterTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Formatter/ScalarFormatterTest.php',
        'Monolog\\Formatter\\TestBar' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Formatter/LineFormatterTest.php',
        'Monolog\\Formatter\\TestBarNorm' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Formatter/NormalizerFormatterTest.php',
        'Monolog\\Formatter\\TestFoo' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Formatter/LineFormatterTest.php',
        'Monolog\\Formatter\\TestFooNorm' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Formatter/NormalizerFormatterTest.php',
        'Monolog\\Formatter\\TestStreamFoo' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Formatter/NormalizerFormatterTest.php',
        'Monolog\\Formatter\\TestToStringError' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Formatter/NormalizerFormatterTest.php',
        'Monolog\\Formatter\\WildfireFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/WildfireFormatter.php',
        'Monolog\\Formatter\\WildfireFormatterTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Formatter/WildfireFormatterTest.php',
        'Monolog\\Handler\\AbstractHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/AbstractHandler.php',
        'Monolog\\Handler\\AbstractHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/AbstractHandlerTest.php',
        'Monolog\\Handler\\AbstractProcessingHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php',
        'Monolog\\Handler\\AbstractProcessingHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/AbstractProcessingHandlerTest.php',
        'Monolog\\Handler\\AbstractSyslogHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/AbstractSyslogHandler.php',
        'Monolog\\Handler\\AmqpHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/AmqpHandler.php',
        'Monolog\\Handler\\AmqpHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/AmqpHandlerTest.php',
        'Monolog\\Handler\\BrowserConsoleHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/BrowserConsoleHandler.php',
        'Monolog\\Handler\\BrowserConsoleHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/BrowserConsoleHandlerTest.php',
        'Monolog\\Handler\\BufferHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/BufferHandler.php',
        'Monolog\\Handler\\BufferHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/BufferHandlerTest.php',
        'Monolog\\Handler\\ChromePHPHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ChromePHPHandler.php',
        'Monolog\\Handler\\ChromePHPHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/ChromePHPHandlerTest.php',
        'Monolog\\Handler\\CouchDBHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/CouchDBHandler.php',
        'Monolog\\Handler\\CouchDBHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/CouchDBHandlerTest.php',
        'Monolog\\Handler\\CubeHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/CubeHandler.php',
        'Monolog\\Handler\\Curl\\Util' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/Curl/Util.php',
        'Monolog\\Handler\\DeduplicationHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/DeduplicationHandler.php',
        'Monolog\\Handler\\DeduplicationHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/DeduplicationHandlerTest.php',
        'Monolog\\Handler\\DoctrineCouchDBHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/DoctrineCouchDBHandler.php',
        'Monolog\\Handler\\DoctrineCouchDBHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/DoctrineCouchDBHandlerTest.php',
        'Monolog\\Handler\\DynamoDbHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/DynamoDbHandler.php',
        'Monolog\\Handler\\DynamoDbHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/DynamoDbHandlerTest.php',
        'Monolog\\Handler\\ElasticSearchHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ElasticSearchHandler.php',
        'Monolog\\Handler\\ElasticSearchHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/ElasticSearchHandlerTest.php',
        'Monolog\\Handler\\ErrorLogHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ErrorLogHandler.php',
        'Monolog\\Handler\\ErrorLogHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/ErrorLogHandlerTest.php',
        'Monolog\\Handler\\ExceptionTestHandler' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/WhatFailureGroupHandlerTest.php',
        'Monolog\\Handler\\FilterHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FilterHandler.php',
        'Monolog\\Handler\\FilterHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/FilterHandlerTest.php',
        'Monolog\\Handler\\FingersCrossedHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FingersCrossedHandler.php',
        'Monolog\\Handler\\FingersCrossedHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/FingersCrossedHandlerTest.php',
        'Monolog\\Handler\\FingersCrossed\\ActivationStrategyInterface' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FingersCrossed/ActivationStrategyInterface.php',
        'Monolog\\Handler\\FingersCrossed\\ChannelLevelActivationStrategy' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FingersCrossed/ChannelLevelActivationStrategy.php',
        'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FingersCrossed/ErrorLevelActivationStrategy.php',
        'Monolog\\Handler\\FirePHPHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FirePHPHandler.php',
        'Monolog\\Handler\\FirePHPHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/FirePHPHandlerTest.php',
        'Monolog\\Handler\\FleepHookHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FleepHookHandler.php',
        'Monolog\\Handler\\FleepHookHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/FleepHookHandlerTest.php',
        'Monolog\\Handler\\FlowdockHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FlowdockHandler.php',
        'Monolog\\Handler\\FlowdockHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/FlowdockHandlerTest.php',
        'Monolog\\Handler\\GelfHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/GelfHandler.php',
        'Monolog\\Handler\\GelfHandlerLegacyTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/GelfHandlerLegacyTest.php',
        'Monolog\\Handler\\GelfHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/GelfHandlerTest.php',
        'Monolog\\Handler\\GelfMockMessagePublisher' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/GelfMockMessagePublisher.php',
        'Monolog\\Handler\\GroupHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/GroupHandler.php',
        'Monolog\\Handler\\GroupHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/GroupHandlerTest.php',
        'Monolog\\Handler\\HandlerInterface' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/HandlerInterface.php',
        'Monolog\\Handler\\HandlerWrapper' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/HandlerWrapper.php',
        'Monolog\\Handler\\HandlerWrapperTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/HandlerWrapperTest.php',
        'Monolog\\Handler\\HipChatHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/HipChatHandler.php',
        'Monolog\\Handler\\HipChatHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/HipChatHandlerTest.php',
        'Monolog\\Handler\\IFTTTHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/IFTTTHandler.php',
        'Monolog\\Handler\\LogEntriesHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/LogEntriesHandler.php',
        'Monolog\\Handler\\LogEntriesHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/LogEntriesHandlerTest.php',
        'Monolog\\Handler\\LogglyHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/LogglyHandler.php',
        'Monolog\\Handler\\MailHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/MailHandler.php',
        'Monolog\\Handler\\MailHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/MailHandlerTest.php',
        'Monolog\\Handler\\MandrillHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/MandrillHandler.php',
        'Monolog\\Handler\\MissingExtensionException' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/MissingExtensionException.php',
        'Monolog\\Handler\\MockRavenClient' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/MockRavenClient.php',
        'Monolog\\Handler\\Mongo' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/MongoDBHandlerTest.php',
        'Monolog\\Handler\\MongoDBHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/MongoDBHandler.php',
        'Monolog\\Handler\\MongoDBHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/MongoDBHandlerTest.php',
        'Monolog\\Handler\\NativeMailerHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/NativeMailerHandler.php',
        'Monolog\\Handler\\NativeMailerHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/NativeMailerHandlerTest.php',
        'Monolog\\Handler\\NewRelicHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/NewRelicHandler.php',
        'Monolog\\Handler\\NewRelicHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/NewRelicHandlerTest.php',
        'Monolog\\Handler\\NullHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/NullHandler.php',
        'Monolog\\Handler\\NullHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/NullHandlerTest.php',
        'Monolog\\Handler\\PHPConsoleHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/PHPConsoleHandler.php',
        'Monolog\\Handler\\PHPConsoleHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/PHPConsoleHandlerTest.php',
        'Monolog\\Handler\\PsrHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/PsrHandler.php',
        'Monolog\\Handler\\PsrHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/PsrHandlerTest.php',
        'Monolog\\Handler\\PushoverHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/PushoverHandler.php',
        'Monolog\\Handler\\PushoverHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/PushoverHandlerTest.php',
        'Monolog\\Handler\\RavenHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/RavenHandler.php',
        'Monolog\\Handler\\RavenHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/RavenHandlerTest.php',
        'Monolog\\Handler\\RedisHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/RedisHandler.php',
        'Monolog\\Handler\\RedisHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/RedisHandlerTest.php',
        'Monolog\\Handler\\RollbarHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/RollbarHandler.php',
        'Monolog\\Handler\\RotatingFileHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/RotatingFileHandler.php',
        'Monolog\\Handler\\RotatingFileHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/RotatingFileHandlerTest.php',
        'Monolog\\Handler\\SamplingHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SamplingHandler.php',
        'Monolog\\Handler\\SamplingHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/SamplingHandlerTest.php',
        'Monolog\\Handler\\SlackHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SlackHandler.php',
        'Monolog\\Handler\\SlackHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/SlackHandlerTest.php',
        'Monolog\\Handler\\SlackWebhookHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SlackWebhookHandler.php',
        'Monolog\\Handler\\SlackWebhookHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/SlackWebhookHandlerTest.php',
        'Monolog\\Handler\\Slack\\SlackRecord' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/Slack/SlackRecord.php',
        'Monolog\\Handler\\Slack\\SlackRecordTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/Slack/SlackRecordTest.php',
        'Monolog\\Handler\\SlackbotHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SlackbotHandler.php',
        'Monolog\\Handler\\SlackbotHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/SlackbotHandlerTest.php',
        'Monolog\\Handler\\SocketHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SocketHandler.php',
        'Monolog\\Handler\\SocketHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/SocketHandlerTest.php',
        'Monolog\\Handler\\StreamHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/StreamHandler.php',
        'Monolog\\Handler\\StreamHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/StreamHandlerTest.php',
        'Monolog\\Handler\\StubNewRelicHandler' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/NewRelicHandlerTest.php',
        'Monolog\\Handler\\StubNewRelicHandlerWithoutExtension' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/NewRelicHandlerTest.php',
        'Monolog\\Handler\\SwiftMailerHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SwiftMailerHandler.php',
        'Monolog\\Handler\\SwiftMailerHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/SwiftMailerHandlerTest.php',
        'Monolog\\Handler\\SyslogHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SyslogHandler.php',
        'Monolog\\Handler\\SyslogHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/SyslogHandlerTest.php',
        'Monolog\\Handler\\SyslogUdpHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SyslogUdpHandler.php',
        'Monolog\\Handler\\SyslogUdpHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/SyslogUdpHandlerTest.php',
        'Monolog\\Handler\\SyslogUdp\\UdpSocket' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SyslogUdp/UdpSocket.php',
        'Monolog\\Handler\\TestChromePHPHandler' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/ChromePHPHandlerTest.php',
        'Monolog\\Handler\\TestFirePHPHandler' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/FirePHPHandlerTest.php',
        'Monolog\\Handler\\TestHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/TestHandler.php',
        'Monolog\\Handler\\TestHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/TestHandlerTest.php',
        'Monolog\\Handler\\UdpSocketTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/UdpSocketTest.php',
        'Monolog\\Handler\\WhatFailureGroupHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/WhatFailureGroupHandler.php',
        'Monolog\\Handler\\WhatFailureGroupHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/WhatFailureGroupHandlerTest.php',
        'Monolog\\Handler\\ZendMonitorHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ZendMonitorHandler.php',
        'Monolog\\Handler\\ZendMonitorHandlerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Handler/ZendMonitorHandlerTest.php',
        'Monolog\\Logger' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Logger.php',
        'Monolog\\LoggerTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/LoggerTest.php',
        'Monolog\\Processor\\GitProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/GitProcessor.php',
        'Monolog\\Processor\\GitProcessorTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Processor/GitProcessorTest.php',
        'Monolog\\Processor\\IntrospectionProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/IntrospectionProcessor.php',
        'Monolog\\Processor\\IntrospectionProcessorTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Processor/IntrospectionProcessorTest.php',
        'Monolog\\Processor\\MemoryPeakUsageProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/MemoryPeakUsageProcessor.php',
        'Monolog\\Processor\\MemoryPeakUsageProcessorTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Processor/MemoryPeakUsageProcessorTest.php',
        'Monolog\\Processor\\MemoryProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/MemoryProcessor.php',
        'Monolog\\Processor\\MemoryUsageProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/MemoryUsageProcessor.php',
        'Monolog\\Processor\\MemoryUsageProcessorTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Processor/MemoryUsageProcessorTest.php',
        'Monolog\\Processor\\MercurialProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/MercurialProcessor.php',
        'Monolog\\Processor\\MercurialProcessorTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Processor/MercurialProcessorTest.php',
        'Monolog\\Processor\\ProcessIdProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/ProcessIdProcessor.php',
        'Monolog\\Processor\\ProcessIdProcessorTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Processor/ProcessIdProcessorTest.php',
        'Monolog\\Processor\\PsrLogMessageProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php',
        'Monolog\\Processor\\PsrLogMessageProcessorTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Processor/PsrLogMessageProcessorTest.php',
        'Monolog\\Processor\\TagProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/TagProcessor.php',
        'Monolog\\Processor\\TagProcessorTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Processor/TagProcessorTest.php',
        'Monolog\\Processor\\UidProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/UidProcessor.php',
        'Monolog\\Processor\\UidProcessorTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Processor/UidProcessorTest.php',
        'Monolog\\Processor\\WebProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/WebProcessor.php',
        'Monolog\\Processor\\WebProcessorTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/Processor/WebProcessorTest.php',
        'Monolog\\PsrLogCompatTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/PsrLogCompatTest.php',
        'Monolog\\Registry' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Registry.php',
        'Monolog\\RegistryTest' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/RegistryTest.php',
        'Monolog\\TestCase' => __DIR__ . '/..' . '/monolog/monolog/tests/Monolog/TestCase.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb07c6b2ac2b0c03e801f52367d7d12cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb07c6b2ac2b0c03e801f52367d7d12cb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb07c6b2ac2b0c03e801f52367d7d12cb::$classMap;

        }, null, ClassLoader::class);
    }
}
