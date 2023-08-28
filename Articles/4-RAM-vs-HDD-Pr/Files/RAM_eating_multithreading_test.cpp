#include <iostream>
#include <sys/resource.h>
#include <chrono>
#include <thread>
#include <vector>

using namespace std;

void ram_eater()
{
    cout << "A ram-eater started eating!" << endl;
    while( true )
    {
        char* arr = new char[1073741824];
        for(int i = 0; i < 1073741824 ; i++)
            arr[i] = 'A';
        delete arr;
    }
}

void test()
{
    for( int i = 0; i < 10; i++ )
    {
        // Start execution time
        clock_t start_1 = clock();
        auto start_2 = chrono::high_resolution_clock::now();

        // Start memory usage
        struct rusage usage;
        getrusage(RUSAGE_SELF, &usage);
        long memory_usage_start = usage.ru_maxrss; // in kilobytes
        
        // Code ----------------------------------------------------------
        char* arr = new char[1073741824];
        for(int j = 0; j < 1073741824 ; j++)
            arr[j] = 'A';
        
        // ---------------------------------------------------------------
        
        // Stop measuring memory usage
        getrusage(RUSAGE_SELF, &usage);
        long memory_usage_end = usage.ru_maxrss; // in kilobytes

        // Stop measuring execution time
        clock_t end_1 = clock();
        auto end_2 = chrono::high_resolution_clock::now();
        double execution_time_1 = double(end_1 - start_1) / CLOCKS_PER_SEC;
        chrono::duration<double, milli> execution_time_2 = end_2 - start_2;

        // Printing result
        cout << "Execution Time (Based on ctime): " << execution_time_1 * 1000.0 << " ms" << endl;
        cout << "Execution Time (Based on chrono): " << execution_time_2.count() << " ms" << endl;
        cout << "Memory Usage: " << memory_usage_end - memory_usage_start << " KB" << endl;

        // Free memory to prevent memory-leak
        delete arr;

        // Sleep for 10 seconds
        this_thread::sleep_for(chrono::milliseconds(10000)); 
    }
}

int main() {
    vector<thread> threads;

    threads.emplace_back(ram_eater);
    threads.emplace_back(ram_eater);
    threads.emplace_back(ram_eater);
    threads.emplace_back(ram_eater);

    threads.emplace_back(test);

    // Wait for test to be over
    threads[4].join();

    return 0;
}