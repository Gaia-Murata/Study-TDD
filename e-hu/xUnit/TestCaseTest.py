#!/usr/bin/python
# Filename: TestCaseTest.py

from TestCase import TestCase
from WasRun import WasRun
from TestSuite import TestSuite
from TestResult import TestResult

class TestCaseTest(TestCase):
    def testSetUp(self):
        self.test.run()
	assert("setUp " == self.test.log)
    
    def testTemplateMethod(self):
        test= WasRun("testMethod")
	test.run()
	assert("setUp testMethod tearDown " == test.log)

    def testResult(self):
        test = WasRun("testMethod")
        result = test.run()
        assert("1 run, 0 failed " == result.summary())

    def testFailedResult(self):
        test = WasRun("testBrokenMethod")
        result = test.run()
        assert("1 run, 0 failed " == result.summary())
    
    def testFailedResultFormatting(self):
        result = TestResult()
        result.testStarted()
        result.testFailed()
        assert("1 run, 1 failed " == result.summary())

    def testSuite(self):
        suite = TestSuite()
        suite.add(WasRun("testMethod"))
        suite.add(WasRun("testBrokenMethod"))
        result = TestResult()
        suite.run(result)
        assert("2 run, 1 failed " == result.summary())

suite = TestSuite()
suite.add(TestCaseTest("testTemplateMethod"))
suite.add(TestCaseTest("testResult"))
suite.add(TestCaseTest("testFailedResultFormatting"))
suite.add(TestCaseTest("testFailedResult"))

result = TestResult()
suite.run(result)
print result.summary()
